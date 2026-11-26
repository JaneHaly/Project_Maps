@props(['building', 'active' => false])
@php
    $hasFacilities = ! empty($building['facilities']);
@endphp
<article data-sidebar-card data-select-building="{{ $building['id'] }}"
         class="cursor-pointer bg-surface border rounded-lg p-gutter-md flex flex-col {{ $hasFacilities ? 'gap-gutter-sm' : 'gap-gutter-xs' }} {{ $active ? 'border-accent shadow-sm' : 'border-border hover:border-accent' }}">
    <div class="flex items-start justify-between gap-gutter-sm">
        <div>
            <h2 class="font-title text-title-md text-on-surface">{{ $building['name'] }}</h2>
            <p class="text-body-sm text-on-surface-muted tabular-nums">{{ $building['meta'] }}</p>
        </div>
        @if ($building['badge'])
            <x-ui.badge :variant="$building['badge']['variant']">{{ $building['badge']['label'] }}</x-ui.badge>
        @endif
    </div>

    @if ($hasFacilities)
        <div class="grid grid-cols-4 gap-gutter-xs text-center">
            @foreach ($building['facilities'] as $facility)
                <div class="p-gutter-xs rounded-sm bg-background">
                    <x-ui.icon :name="$facility['icon']" class="w-4 h-4 mx-auto text-primary" />
                    <span class="block font-label text-label-sm text-on-surface mt-0.5">{{ $facility['label'] }}</span>
                </div>
            @endforeach
        </div>
    @elseif ($building['summary'])
        <p class="text-body-sm text-on-surface-muted text-balance">{{ $building['summary'] }}</p>
    @endif
</article>
