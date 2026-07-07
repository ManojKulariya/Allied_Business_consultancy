<?php

namespace App\Services\Admin;

use App\Models\Contact;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ContactService extends BaseCrudService
{
    protected string $model = Contact::class;

    protected array $searchable = ['name', 'email', 'phone', 'company_name', 'message'];

    protected array $sortable = ['id', 'name', 'created_at'];

    protected string $defaultDirection = 'desc';

    /**
     * Inbox listing: search / sort / trash, plus read-status, reply-status
     * and date-range filters (no "status" column here — Contact isn't a
     * generic CRUD module, it's submitted leads).
     */
    public function list(Request $request, int $perPage = 15): LengthAwarePaginator
    {
        $query = $request->boolean('trashed')
            ? $this->query()->onlyTrashed()
            : $this->query();

        if ($search = trim((string) $request->query('search'))) {
            $query->where(function (Builder $q) use ($search) {
                foreach ($this->searchable as $column) {
                    $q->orWhere($column, 'like', "%{$search}%");
                }
            });
        }

        if ($request->filled('read')) {
            $query->where('is_read', $request->query('read') === '1');
        }

        if ($request->filled('reply_status')) {
            $query->where('reply_status', $request->query('reply_status'));
        }

        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->query('date_from'));
        }

        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->query('date_to'));
        }

        $sort = in_array($request->query('sort'), $this->sortable, true)
            ? $request->query('sort')
            : $this->sortable[0];
        $direction = in_array($request->query('direction'), ['asc', 'desc'], true)
            ? $request->query('direction')
            : $this->defaultDirection;

        $query->orderBy($sort, $direction)->orderByDesc('id');

        return $query->paginate($perPage)->withQueryString();
    }
}
