<?php

namespace App\Services\Admin;

use App\Traits\HasImageUpload;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

/**
 * Generic admin CRUD engine: listing (search / sort / filter / paginate),
 * store & update with automatic file-field handling, status toggle,
 * soft delete, restore, force delete and bulk operations.
 *
 * Concrete services define $model, $searchable, $sortable and $fileFields.
 */
abstract class BaseCrudService
{
    use HasImageUpload;

    /** Model class this service manages. */
    protected string $model;

    /** Columns matched by the ?search= query. */
    protected array $searchable = ['title'];

    /** Columns allowed for ?sort= (whitelist — never trust raw input). */
    protected array $sortable = ['id', 'sort_order', 'created_at'];

    /** Default sort direction when none requested. */
    protected string $defaultDirection = 'desc';

    /** request_field => upload_directory map for auto file handling. */
    protected array $fileFields = [];

    /** Default eager loads for the index listing. */
    protected array $with = [];

    public function query(): Builder
    {
        return $this->model::query()->with($this->with);
    }

    /**
     * Paginated, searched, sorted, optionally trashed-only listing.
     */
    public function list(Request $request, int $perPage = 15): LengthAwarePaginator
    {
        $query = $request->boolean('trashed') && $this->usesSoftDeletes()
            ? $this->query()->onlyTrashed()
            : $this->query();

        // Search across whitelisted columns
        if ($search = trim((string) $request->query('search'))) {
            $query->where(function (Builder $q) use ($search) {
                foreach ($this->searchable as $column) {
                    $q->orWhere($column, 'like', "%{$search}%");
                }
            });
        }

        // Status filter
        if ($request->filled('status')) {
            $query->where('status', (int) $request->query('status'));
        }

        // Sorting (whitelisted columns only)
        $sort = in_array($request->query('sort'), $this->sortable, true)
            ? $request->query('sort')
            : $this->sortable[0];
        $direction = in_array($request->query('direction'), ['asc', 'desc'], true)
            ? $request->query('direction')
            : $this->defaultDirection;
        $query->orderBy($sort, $direction)->orderByDesc($query->getModel()->getKeyName());

        return $query->paginate($perPage)->withQueryString();
    }

    public function findOrFail(int $id): Model
    {
        return $this->model::query()->findOrFail($id);
    }

    /**
     * Create a record, uploading any configured file fields.
     */
    public function store(array $data): Model
    {
        return DB::transaction(function () use ($data) {
            $data = $this->handleFileUploads($data);

            return $this->model::query()->create($data);
        });
    }

    /**
     * Update a record, replacing uploaded files where new ones are provided.
     */
    public function update(Model $model, array $data): Model
    {
        return DB::transaction(function () use ($model, $data) {
            $data = $this->handleFileUploads($data, $model);
            $model->update($data);

            return $model->refresh();
        });
    }

    /**
     * Soft delete (or plain delete when the model has no SoftDeletes).
     */
    public function delete(Model $model): bool
    {
        return (bool) $model->delete();
    }

    /**
     * Restore a soft-deleted record.
     */
    public function restore(int $id): Model
    {
        $model = $this->model::query()->onlyTrashed()->findOrFail($id);
        $model->restore();

        return $model;
    }

    /**
     * Permanently delete a record and its uploaded files.
     */
    public function forceDelete(int $id): bool
    {
        $model = $this->model::query()->withTrashed()->findOrFail($id);

        foreach (array_keys($this->fileFields) as $field) {
            $this->deleteFile($model->getRawOriginal($field));
        }

        return (bool) $model->forceDelete();
    }

    /**
     * Bulk soft delete by ids. Returns number of affected rows.
     */
    public function bulkDelete(array $ids): int
    {
        $count = 0;

        $this->model::query()->whereKey($ids)->get()
            ->each(function (Model $model) use (&$count) {
                $count += (int) $model->delete();
            });

        return $count;
    }

    /**
     * Toggle active/inactive status.
     */
    public function toggleStatus(Model $model): Model
    {
        $model->toggleStatus();

        return $model->refresh();
    }

    /**
     * Bulk set active/inactive status by ids. Returns number of affected rows.
     */
    public function bulkSetStatus(array $ids, bool $active): int
    {
        return $this->model::query()->whereKey($ids)
            ->update(['status' => $active ? \App\Enums\Status::Active : \App\Enums\Status::Inactive]);
    }

    /**
     * Upload configured file fields and clean up replaced files.
     * Media-picker fields submit library paths (strings) and pass straight
     * through — only raw file inputs need processing here.
     */
    protected function handleFileUploads(array $data, ?Model $existing = null): array
    {
        foreach ($this->fileFields as $field => $directory) {
            $value = $data[$field] ?? null;

            if ($value instanceof UploadedFile) {
                $data[$field] = $existing
                    ? $this->replaceFile($value, $existing->getRawOriginal($field), $directory)
                    : $this->uploadFile($value, $directory);
            } elseif (is_string($value)) {
                $data[$field] = $value !== '' ? $value : null; // media picker path / cleared
            } else {
                unset($data[$field]); // keep existing value when nothing submitted
            }
        }

        return $data;
    }

    protected function usesSoftDeletes(): bool
    {
        return in_array(SoftDeletes::class, class_uses_recursive($this->model));
    }
}
