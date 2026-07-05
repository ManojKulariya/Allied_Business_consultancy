<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\RepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class BaseRepository implements RepositoryInterface
{
    public function __construct(protected Model $model)
    {
    }

    public function query(): Builder
    {
        return $this->model->newQuery();
    }

    public function all(array $columns = ['*']): Collection
    {
        return $this->query()->get($columns);
    }

    public function paginate(int $perPage = 15, array $columns = ['*']): LengthAwarePaginator
    {
        return $this->query()->paginate($perPage, $columns)->withQueryString();
    }

    public function find(int $id): ?Model
    {
        return $this->query()->find($id);
    }

    public function findOrFail(int $id): Model
    {
        return $this->query()->findOrFail($id);
    }

    public function findBySlug(string $slug): ?Model
    {
        return $this->query()->where('slug', $slug)->first();
    }

    public function create(array $attributes): Model
    {
        return $this->query()->create($attributes);
    }

    public function update(Model $model, array $attributes): Model
    {
        $model->update($attributes);

        return $model->refresh();
    }

    public function delete(Model $model): bool
    {
        return (bool) $model->delete();
    }

    public function restore(int $id): bool
    {
        $model = $this->trashedQuery()->findOrFail($id);

        return (bool) $model->restore();
    }

    public function forceDelete(int $id): bool
    {
        $model = $this->trashedQuery()->findOrFail($id);

        return (bool) $model->forceDelete();
    }

    /**
     * Query including trashed rows (when the model soft deletes).
     */
    protected function trashedQuery(): Builder
    {
        $query = $this->query();

        if (in_array(SoftDeletes::class, class_uses_recursive($this->model))) {
            $query->withTrashed();
        }

        return $query;
    }
}
