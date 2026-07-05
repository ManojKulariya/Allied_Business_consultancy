@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h4 mb-1">Dashboard</h1>
            <p class="text-muted small mb-0">Welcome back, {{ auth()->user()->name }}!</p>
        </div>
        <span class="text-muted small">
            <i class="bi bi-clock me-1"></i>{{ now()->format('l, d M Y') }}
        </span>
    </div>

    {{-- Stat cards --}}
    <div class="row g-3 mb-4">
        @foreach($stats as $stat)
            <div class="col-6 col-md-4 col-xl-3">
                <a href="{{ safe_route($stat['route']) }}" class="text-decoration-none">
                    <div class="card stat-card shadow-sm h-100">
                        <div class="card-body d-flex align-items-center gap-3">
                            <div class="stat-icon bg-{{ $stat['color'] }} bg-opacity-10 text-{{ $stat['color'] }}">
                                <i class="bi {{ $stat['icon'] }}"></i>
                            </div>
                            <div>
                                <div class="h4 mb-0 text-dark">{{ number_format($stat['value']) }}</div>
                                <div class="small text-muted">{{ $stat['label'] }}</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <div class="row g-3">
        {{-- Contacts chart --}}
        <div class="col-lg-8">
            <div class="card h-100">
                <div class="card-header">Contact Enquiries — Last 6 Months</div>
                <div class="card-body">
                    <canvas id="contactsChart" height="110"></canvas>
                </div>
            </div>
        </div>

        {{-- Recent messages --}}
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Recent Messages
                    <a href="{{ safe_route('admin.contacts.index') }}" class="small text-decoration-none">View all</a>
                </div>
                <div class="list-group list-group-flush">
                    @forelse($recentContacts as $contact)
                        <div class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <strong class="small">{{ $contact->name }}</strong>
                                @unless($contact->is_read)
                                    <span class="badge bg-danger-subtle text-danger">New</span>
                                @endunless
                            </div>
                            <div class="small text-muted text-truncate">{{ $contact->subject ?? Str::limit($contact->message, 50) }}</div>
                            <div class="small text-muted">{{ $contact->created_at->diffForHumans() }}</div>
                        </div>
                    @empty
                        <div class="list-group-item text-muted small">No messages yet.</div>
                    @endforelse
                </div>
            </div>
        </div>

        {{-- Recent applications --}}
        <div class="col-lg-6">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Recent Job Applications
                    <a href="{{ safe_route('admin.job-applications.index') }}" class="small text-decoration-none">View all</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Applicant</th>
                                <th>Position</th>
                                <th>Status</th>
                                <th>Applied</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentApplications as $application)
                                <tr>
                                    <td class="small">{{ $application->name }}</td>
                                    <td class="small">{{ $application->career?->title ?? '—' }}</td>
                                    <td><span class="badge {{ $application->status_badge }}">{{ ucfirst($application->application_status) }}</span></td>
                                    <td class="small text-muted">{{ $application->created_at->diffForHumans() }}</td>
                                </tr>
                            @empty
                                <tr><td colspan="4" class="text-muted small">No applications yet.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Activity feed --}}
        <div class="col-lg-6">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Recent Activity
                    <a href="{{ safe_route('admin.activity-logs.index') }}" class="small text-decoration-none">View all</a>
                </div>
                <div class="list-group list-group-flush">
                    @forelse($recentActivities as $activity)
                        <div class="list-group-item d-flex align-items-start gap-2">
                            <i class="bi bi-activity text-primary mt-1"></i>
                            <div class="flex-grow-1">
                                <div class="small">
                                    <strong>{{ $activity->causer?->name ?? 'System' }}</strong>
                                    {{ $activity->description }}
                                    <span class="text-muted">{{ $activity->log_name }}</span>
                                </div>
                                <div class="small text-muted">{{ $activity->created_at->diffForHumans() }}</div>
                            </div>
                        </div>
                    @empty
                        <div class="list-group-item text-muted small">No activity recorded yet.</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>
<script>
    new Chart(document.getElementById('contactsChart'), {
        type: 'line',
        data: {
            labels: @json($monthlyContacts['labels']),
            datasets: [{
                label: 'Enquiries',
                data: @json($monthlyContacts['data']),
                borderColor: '#0d6efd',
                backgroundColor: 'rgba(13, 110, 253, 0.08)',
                fill: true,
                tension: 0.4,
            }],
        },
        options: {
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true, ticks: { precision: 0 } } },
        },
    });
</script>
@endpush
