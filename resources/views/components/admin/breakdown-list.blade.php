{{-- Reusable ranked bar-list — used by Traffic Sources, OS, Browsers,
     Countries/Regions/Cities on the Analytics dashboard. --}}
@props(['items' => []])
@php $max = collect($items)->max('value') ?: 1; @endphp

<div class="d-flex flex-column gap-3">
    @forelse($items as $item)
        <div>
            <div class="d-flex justify-content-between small mb-1">
                <span>{{ $item['label'] }}</span>
                <span class="text-muted">{{ number_format($item['value']) }}</span>
            </div>
            <div class="progress" style="height: 6px;">
                <div class="progress-bar" style="width: {{ round($item['value'] / $max * 100) }}%;"></div>
            </div>
        </div>
    @empty
        <div class="text-muted small text-center py-3">No data available.</div>
    @endforelse
</div>
