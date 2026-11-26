@props([
    'variant'  => 'desktop', // desktop | mobile
    'campuses' => config('campusmap.campuses'),
    'current'  => config('campusmap.default_campus'),
])
@php
    $mobile = $variant === 'mobile';
    $button = $mobile ? 'bg-surface/95 backdrop-blur-md border border-border shadow-sm' : 'bg-surface border border-border hover:bg-background';
    $menu   = $mobile ? 'shadow-lg' : 'shadow-[0_12px_32px_-4px_rgba(23,45,77,0.14)]';
@endphp
<div class="relative" data-campus>
    <button type="button" data-campus-toggle aria-haspopup="listbox" aria-expanded="false"
            class="inline-flex items-center gap-gutter-xs px-gutter-md py-gutter-sm rounded-full {{ $button }}">
        <x-ui.icon name="map-pin" class="w-4 h-4 text-accent" />
        <span data-campus-label class="font-label text-label-md text-primary">{{ $current }}</span>
        <x-ui.icon name="chevron-down" :class="($mobile ? 'w-3.5 h-3.5' : 'w-4 h-4') . ' text-on-surface-muted'" />
    </button>
    <ul data-campus-menu class="hidden absolute right-0 mt-gutter-xs w-48 bg-surface border border-border rounded-md p-gutter-xs z-40 {{ $menu }}">
        @foreach ($campuses as $campus)
            <li data-campus-option="{{ $campus }}"
                class="px-gutter-md py-gutter-sm rounded-sm cursor-pointer font-label text-label-md {{ $campus === $current ? 'bg-accent-container/60' : 'hover:bg-background' }}">{{ $campus }}</li>
        @endforeach
    </ul>
</div>
