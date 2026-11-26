{{-- Tombol layer / zoom / reset. Harus berada di dalam elemen [data-map]. --}}
@props(['variant' => 'desktop']) {{-- desktop | mobile --}}
@php
    $desktop = $variant === 'desktop';
    $wrap    = $desktop ? 'right-gutter-xl top-gutter-xl' : 'right-page-margin bottom-[320px]';
    $size    = $desktop ? 'w-11 h-11' : 'w-10 h-10';
    $icon    = $desktop ? 'w-5 h-5' : 'w-4 h-4';
    $surface = $desktop ? 'bg-surface' : 'bg-surface/95';
    $hover   = $desktop ? 'hover:bg-background' : '';
@endphp
<div class="absolute {{ $wrap }} z-20 flex flex-col gap-gutter-sm">
    <button type="button" aria-label="Lapisan peta"
            class="{{ $size }} rounded-full {{ $surface }} border border-border shadow-md flex items-center justify-center text-primary {{ $hover }}">
        <x-ui.icon name="layers" :class="$icon" />
    </button>

    <div class="flex flex-col {{ $surface }} border border-border rounded-full shadow-md overflow-hidden divide-y divide-border">
        <button type="button" data-map-action="zoom-in" aria-label="Perbesar peta"
                class="{{ $size }} flex items-center justify-center text-primary {{ $hover }}">
            <x-ui.icon name="plus" :class="$icon" />
        </button>
        <button type="button" data-map-action="zoom-out" aria-label="Perkecil peta"
                class="{{ $size }} flex items-center justify-center text-primary {{ $hover }}">
            <x-ui.icon name="minus" :class="$icon" />
        </button>
    </div>

    <button type="button" data-map-action="reset" aria-label="Lokasi saya"
            class="{{ $size }} rounded-full {{ $surface }} border border-border shadow-md flex items-center justify-center text-accent {{ $hover }}">
        <x-ui.icon name="locate-fixed" :class="$icon" />
    </button>
</div>
