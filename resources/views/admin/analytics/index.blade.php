@extends('admin.layouts.app')

@section('title', 'Analytics Dashboard')

@section('breadcrumbs')
    <li class="breadcrumb-item active">Analytics</li>
@endsection

@section('content')
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
        <div>
            <h1 class="h4 mb-1">Analytics Dashboard</h1>
            <p class="text-muted small mb-0">Traffic, behaviour and lead data — last 30 days unless noted.</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ safe_route('admin.analytics.behavior') }}" class="btn btn-sm btn-outline-primary">
                <i class="bi bi-cursor me-1"></i> Behavior Analytics
            </a>
            <a href="{{ safe_route('admin.settings.edit', 'analytics') }}" class="btn btn-sm btn-outline-secondary">
                <i class="bi bi-gear me-1"></i> Analytics Settings
            </a>
        </div>
    </div>

    @unless($configured)
        <div class="alert alert-warning d-flex align-items-start gap-2">
            <i class="bi bi-exclamation-triangle-fill fs-5"></i>
            <div>
                <strong>Google Analytics is not connected.</strong>
                Add your GA4 Property ID and Service Account JSON in
                <a href="{{ safe_route('admin.settings.edit', 'analytics') }}">Analytics Settings</a>
                to see live traffic data. Lead analytics below are unaffected — those come straight from your Contact form.
            </div>
        </div>
    @endunless

    {{-- ============ Top Cards ============ --}}
    @php
        $visitorCards = [
            ['label' => "Today's Visitors", 'value' => $visitorSummary['today'] ?? 0, 'icon' => 'bi-calendar-day', 'color' => 'primary'],
            ['label' => 'Yesterday Visitors', 'value' => $visitorSummary['yesterday'] ?? 0, 'icon' => 'bi-calendar-minus', 'color' => 'secondary'],
            ['label' => 'This Week Visitors', 'value' => $visitorSummary['this_week'] ?? 0, 'icon' => 'bi-calendar-week', 'color' => 'info'],
            ['label' => 'This Month Visitors', 'value' => $visitorSummary['this_month'] ?? 0, 'icon' => 'bi-calendar-month', 'color' => 'success'],
            ['label' => 'This Year Visitors', 'value' => $visitorSummary['this_year'] ?? 0, 'icon' => 'bi-calendar3', 'color' => 'warning'],
            ['label' => 'Total Visitors', 'value' => $visitorSummary['total'] ?? 0, 'icon' => 'bi-people-fill', 'color' => 'dark'],
            ['label' => 'Active Users', 'value' => $engagement['active_users'] ?? 0, 'icon' => 'bi-person-check', 'color' => 'primary'],
            ['label' => 'New Users', 'value' => $engagement['new_users'] ?? 0, 'icon' => 'bi-person-plus', 'color' => 'success'],
            ['label' => 'Returning Users', 'value' => $engagement['returning_users'] ?? 0, 'icon' => 'bi-arrow-repeat', 'color' => 'info'],
            ['label' => 'Avg. Session Duration', 'value' => gmdate('i:s', (int) ($engagement['avg_session_duration'] ?? 0)), 'icon' => 'bi-stopwatch', 'color' => 'secondary', 'raw' => true],
            ['label' => 'Bounce Rate', 'value' => ($engagement['bounce_rate'] ?? 0).'%', 'icon' => 'bi-box-arrow-right', 'color' => 'danger', 'raw' => true],
            ['label' => 'Pages / Session', 'value' => $engagement['pages_per_session'] ?? 0, 'icon' => 'bi-files', 'color' => 'warning', 'raw' => true],
        ];
    @endphp
    <div class="row g-3 mb-4">
        @foreach($visitorCards as $card)
            <div class="col-6 col-md-4 col-xl-3">
                <div class="card stat-card shadow-sm h-100">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="stat-icon bg-{{ $card['color'] }} bg-opacity-10 text-{{ $card['color'] }}">
                            <i class="bi {{ $card['icon'] }}"></i>
                        </div>
                        <div>
                            <div class="h5 mb-0 text-dark">{{ $card['raw'] ?? false ? $card['value'] : number_format($card['value']) }}</div>
                            <div class="small text-muted">{{ $card['label'] }}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row g-3 mb-4">
        {{-- ============ Visitor Graph ============ --}}
        <div class="col-lg-8">
            <div class="card h-100">
                <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
                    <span>Visitor Trend</span>
                    <div class="btn-group btn-group-sm" role="group" id="trendPeriodGroup">
                        <button type="button" class="btn btn-outline-primary active" data-period="7d">7 Days</button>
                        <button type="button" class="btn btn-outline-primary" data-period="30d">30 Days</button>
                        <button type="button" class="btn btn-outline-primary" data-period="90d">90 Days</button>
                        <button type="button" class="btn btn-outline-primary" data-period="12m">12 Months</button>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="visitorTrendChart" height="110"></canvas>
                </div>
            </div>
        </div>

        {{-- ============ Traffic Sources ============ --}}
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header">Traffic Sources</div>
                <div class="card-body">
                    <canvas id="trafficSourcesChart" height="180"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 mb-4">
        {{-- ============ Top Pages ============ --}}
        <div class="col-lg-6">
            <div class="card h-100">
                <div class="card-header">Top Pages</div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0 small">
                        <thead><tr><th>Page</th><th>Views</th><th>Visitors</th><th>Avg. Time</th><th>Bounce</th></tr></thead>
                        <tbody>
                            @forelse($topPages as $page)
                                <tr>
                                    <td class="text-truncate" style="max-width: 220px;" title="{{ $page['title'] }}">{{ $page['title'] ?: $page['path'] }}</td>
                                    <td>{{ number_format($page['views']) }}</td>
                                    <td>{{ number_format($page['visitors']) }}</td>
                                    <td>{{ gmdate('i:s', (int) $page['avg_time']) }}</td>
                                    <td>{{ $page['bounce_rate'] }}%</td>
                                </tr>
                            @empty
                                <tr><td colspan="5" class="text-muted text-center py-4">No data available.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- ============ Top Services ============ --}}
        <div class="col-lg-6">
            <div class="card h-100">
                <div class="card-header">Top Services</div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0 small">
                        <thead><tr><th>Service Page</th><th>Views</th><th>Visitors</th><th>Bounce</th></tr></thead>
                        <tbody>
                            @forelse($topServices as $page)
                                <tr>
                                    <td class="text-truncate" style="max-width: 240px;" title="{{ $page['title'] }}">{{ $page['title'] ?: $page['path'] }}</td>
                                    <td>{{ number_format($page['views']) }}</td>
                                    <td>{{ number_format($page['visitors']) }}</td>
                                    <td>{{ $page['bounce_rate'] }}%</td>
                                </tr>
                            @empty
                                <tr><td colspan="4" class="text-muted text-center py-4">No data available.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 mb-4">
        {{-- ============ Top Blogs ============ --}}
        <div class="col-lg-6">
            <div class="card h-100">
                <div class="card-header">Top Blog Posts</div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0 small">
                        <thead><tr><th>Post</th><th>Views</th><th>Visitors</th><th>Avg. Time</th></tr></thead>
                        <tbody>
                            @forelse($topBlogs as $page)
                                <tr>
                                    <td class="text-truncate" style="max-width: 240px;" title="{{ $page['title'] }}">{{ $page['title'] ?: $page['path'] }}</td>
                                    <td>{{ number_format($page['views']) }}</td>
                                    <td>{{ number_format($page['visitors']) }}</td>
                                    <td>{{ gmdate('i:s', (int) $page['avg_time']) }}</td>
                                </tr>
                            @empty
                                <tr><td colspan="4" class="text-muted text-center py-4">No data available.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- ============ Devices ============ --}}
        <div class="col-lg-3 col-md-6">
            <div class="card h-100">
                <div class="card-header">Devices</div>
                <div class="card-body">
                    <canvas id="devicesChart" height="180"></canvas>
                </div>
            </div>
        </div>

        {{-- ============ Live Users ============ --}}
        <div class="col-lg-3 col-md-6">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><span class="live-dot"></span> Live Users</span>
                    <span class="h5 mb-0" id="liveUsersTotal">{{ $realtime['total'] ?? 0 }}</span>
                </div>
                <div class="list-group list-group-flush small" id="liveUsersList" style="max-height: 260px; overflow-y: auto;">
                    @forelse($realtime['rows'] ?? [] as $row)
                        <div class="list-group-item py-2">
                            <div class="text-truncate fw-semibold">{{ $row['page'] }}</div>
                            <div class="text-muted">{{ $row['country'] }} · {{ ucfirst($row['device']) }} · {{ $row['active_users'] }} user(s)</div>
                        </div>
                    @empty
                        <div class="list-group-item text-muted text-center py-4">No active users right now.</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 mb-4">
        {{-- ============ Countries / States / Cities ============ --}}
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header">Top Countries</div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0 small">
                        <thead><tr><th>Country</th><th>Visitors</th></tr></thead>
                        <tbody>
                            @forelse($countries as $row)
                                <tr><td>{{ $row['label'] }}</td><td>{{ number_format($row['value']) }}</td></tr>
                            @empty
                                <tr><td colspan="2" class="text-muted text-center py-4">No data available.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header">Top States</div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0 small">
                        <thead><tr><th>State / Region</th><th>Visitors</th></tr></thead>
                        <tbody>
                            @forelse($regions as $row)
                                <tr><td>{{ $row['label'] }}</td><td>{{ number_format($row['value']) }}</td></tr>
                            @empty
                                <tr><td colspan="2" class="text-muted text-center py-4">No data available.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header">Top Cities</div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0 small">
                        <thead><tr><th>City</th><th>Visitors</th></tr></thead>
                        <tbody>
                            @forelse($cities as $row)
                                <tr><td>{{ $row['label'] }}</td><td>{{ number_format($row['value']) }}</td></tr>
                            @empty
                                <tr><td colspan="2" class="text-muted text-center py-4">No data available.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 mb-4">
        {{-- ============ Operating Systems ============ --}}
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header">Operating Systems</div>
                <div class="card-body">
                    <x-admin.breakdown-list :items="$operatingSystems" />
                </div>
            </div>
        </div>

        {{-- ============ Browsers ============ --}}
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header">Browsers</div>
                <div class="card-body">
                    <x-admin.breakdown-list :items="$browsers" />
                </div>
            </div>
        </div>

        {{-- ============ Search Analytics ============ --}}
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header">Landing &amp; Exit Pages</div>
                <div class="card-body">
                    <p class="small fw-semibold mb-2">Top Entry Pages</p>
                    <x-admin.breakdown-list :items="collect($landingPages)->map(fn ($r) => ['label' => $r['path'], 'value' => $r['sessions']])->all()" />
                    <p class="small fw-semibold mb-2 mt-3">Top Exit Pages</p>
                    <x-admin.breakdown-list :items="collect($exitPages)->map(fn ($r) => ['label' => $r['path'], 'value' => $r['sessions']])->all()" />
                    <p class="small text-muted mt-3 mb-0">
                        <i class="bi bi-info-circle me-1"></i>Search query data requires a separate Google Search Console connection, not included in this GA4-only integration.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- ============ Lead Analytics ============ --}}
    <h2 class="h5 mb-3">Lead Analytics</h2>
    <div class="row g-3 mb-4">
        @foreach([
            ['label' => "Today's Leads", 'value' => $leadSummary['today'], 'icon' => 'bi-envelope-plus', 'color' => 'primary'],
            ['label' => 'Weekly Leads', 'value' => $leadSummary['this_week'], 'icon' => 'bi-envelope-check', 'color' => 'info'],
            ['label' => 'Monthly Leads', 'value' => $leadSummary['this_month'], 'icon' => 'bi-envelope-paper', 'color' => 'success'],
            ['label' => 'Unread Leads', 'value' => $leadSummary['unread'], 'icon' => 'bi-envelope-exclamation', 'color' => 'danger'],
            ['label' => 'Total Leads', 'value' => $leadSummary['total'], 'icon' => 'bi-people', 'color' => 'dark'],
        ] as $card)
            <div class="col-6 col-md-4 col-xl">
                <a href="{{ safe_route('admin.contacts.index') }}" class="text-decoration-none">
                    <div class="card stat-card shadow-sm h-100">
                        <div class="card-body d-flex align-items-center gap-3">
                            <div class="stat-icon bg-{{ $card['color'] }} bg-opacity-10 text-{{ $card['color'] }}">
                                <i class="bi {{ $card['icon'] }}"></i>
                            </div>
                            <div>
                                <div class="h5 mb-0 text-dark">{{ number_format($card['value']) }}</div>
                                <div class="small text-muted">{{ $card['label'] }}</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    {{-- ============ Service Performance ============ --}}
    <h2 class="h5 mb-3">Service Performance</h2>
    <div class="row g-3 mb-4">
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header">Most Requested Services</div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0 small">
                        <thead><tr><th>Service</th><th>Leads</th></tr></thead>
                        <tbody>
                            @forelse($mostRequestedServices as $row)
                                <tr><td>{{ $row['service'] }}</td><td>{{ $row['leads'] }}</td></tr>
                            @empty
                                <tr><td colspan="2" class="text-muted text-center py-4">No leads yet.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header">Highest Conversion Services</div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0 small">
                        <thead><tr><th>Service</th><th>Views</th><th>Leads</th><th>Rate</th></tr></thead>
                        <tbody>
                            @forelse($highestConversionServices as $row)
                                <tr><td>{{ $row['service'] }}</td><td>{{ $row['views'] }}</td><td>{{ $row['leads'] }}</td><td>{{ $row['conversion_rate'] }}%</td></tr>
                            @empty
                                <tr><td colspan="4" class="text-muted text-center py-4">No data available.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header">Least Visited Services</div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0 small">
                        <thead><tr><th>Service</th><th>Views</th></tr></thead>
                        <tbody>
                            @forelse($leastVisitedServices as $row)
                                <tr><td>{{ $row['service'] }}</td><td>{{ $row['views'] }}</td></tr>
                            @empty
                                <tr><td colspan="2" class="text-muted text-center py-4">No data available.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
<style>
    .live-dot {
        display: inline-block; width: 8px; height: 8px; border-radius: 50%;
        background: #dc3545; margin-right: 4px; animation: live-pulse 1.5s infinite;
    }
    @keyframes live-pulse { 0%, 100% { opacity: 1; } 50% { opacity: .3; } }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const trendCtx = document.getElementById('visitorTrendChart');
    const trendChart = new Chart(trendCtx, {
        type: 'line',
        data: { labels: [], datasets: [{ label: 'Visitors', data: [], borderColor: '#0d6efd', backgroundColor: 'rgba(13,110,253,.08)', fill: true, tension: 0.4 }] },
        options: { plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true, ticks: { precision: 0 } } }, responsive: true, maintainAspectRatio: true },
    });

    function loadTrend(period) {
        fetch("{{ safe_route('admin.analytics.chart-data') }}?period=" + period)
            .then(r => r.json())
            .then(res => {
                trendChart.data.labels = res.trend.map(row => row.date);
                trendChart.data.datasets[0].data = res.trend.map(row => row.visitors);
                trendChart.update();
            });
    }

    document.querySelectorAll('#trendPeriodGroup button').forEach(btn => {
        btn.addEventListener('click', function () {
            document.querySelectorAll('#trendPeriodGroup button').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            loadTrend(this.dataset.period);
        });
    });

    loadTrend('7d');

    new Chart(document.getElementById('trafficSourcesChart'), {
        type: 'pie',
        data: {
            labels: @json(collect($trafficSources)->pluck('label')),
            datasets: [{ data: @json(collect($trafficSources)->pluck('value')), backgroundColor: ['#0d6efd', '#20c997', '#ffc107', '#fd7e14', '#6f42c1', '#dc3545', '#6c757d'] }],
        },
        options: { plugins: { legend: { position: 'bottom', labels: { boxWidth: 10, font: { size: 11 } } } } },
    });

    new Chart(document.getElementById('devicesChart'), {
        type: 'pie',
        data: {
            labels: @json(collect($devices)->pluck('label')),
            datasets: [{ data: @json(collect($devices)->pluck('value')), backgroundColor: ['#0d6efd', '#20c997', '#ffc107'] }],
        },
        options: { plugins: { legend: { position: 'bottom', labels: { boxWidth: 10, font: { size: 11 } } } } },
    });

    // Live Users — poll every 30s
    function refreshLiveUsers() {
        fetch("{{ safe_route('admin.analytics.realtime') }}")
            .then(r => r.json())
            .then(res => {
                document.getElementById('liveUsersTotal').textContent = res.total ?? 0;
                const list = document.getElementById('liveUsersList');
                if (!res.rows || !res.rows.length) {
                    list.innerHTML = '<div class="list-group-item text-muted text-center py-4">No active users right now.</div>';
                    return;
                }
                list.innerHTML = res.rows.map(row => `
                    <div class="list-group-item py-2">
                        <div class="text-truncate fw-semibold">${row.page}</div>
                        <div class="text-muted">${row.country} · ${row.device} · ${row.active_users} user(s)</div>
                    </div>
                `).join('');
            })
            .catch(() => {});
    }

    @if($configured)
        setInterval(refreshLiveUsers, 30000);
    @endif
});
</script>
@endpush
