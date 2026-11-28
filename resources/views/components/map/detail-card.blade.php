{{-- Kartu detail lokasi terpilih. Elemen [data-detail] diperbarui oleh building-selector.js --}}
@props(['building', 'variant' => 'desktop']) {{-- desktop = panel melayang | mobile = bottom sheet --}}
@php $mobile = $variant === 'mobile'; @endphp
<section aria-label="Detail lokasi terpilih"
         class="absolute z-20 {{ $mobile ? 'left-0 right-0 bottom-[68px] px-gutter-sm' : 'right-gutter-xl bottom-gutter-xl w-[360px]' }}">
    <article class="bg-surface border border-border rounded-lg flex flex-col gap-gutter-sm {{ $mobile ? 'p-gutter-md shadow-[0_-4px_24px_rgba(23,45,77,0.12)]' : 'p-gutter-lg shadow-[0_12px_32px_-4px_rgba(23,45,77,0.16)]' }}">

        @if ($mobile)
            <div class="flex justify-center pb-gutter-xs"><span class="w-9 h-1 rounded-full bg-border-strong"></span></div>
        @endif

        <div class="flex items-start gap-gutter-md">
            <img data-detail="photo" src="{{ $building['photo_url'] }}" alt="{{ $building['name'] }}"
                 class="w-20 h-20 rounded-md object-cover shrink-0 border border-border">
            <div class="flex-1 min-w-0">
                <div class="flex items-start justify-between gap-gutter-xs">
                    <h2 data-detail="title" class="font-title text-title-md text-on-surface truncate">{{ $building['name'] }}</h2>
                    @if ($mobile)
                        <x-ui.badge variant="success" class="shrink-0">Buka</x-ui.badge>
                    @endif
                </div>
                <p data-detail="campus" class="font-label text-label-md text-accent tabular-nums mt-0.5">{{ $building['meta_detail'] }}</p>
                <p data-detail="description" class="text-body-sm text-on-surface-muted mt-1 {{ $mobile ? 'line-clamp-2' : '' }}">{{ $building['description'] }}</p>
            </div>
        </div>

        {{-- Ganti "#" dengan route('indoor.index') kalau halamannya sudah dibuat --}}
        <a href="#" class="flex items-center justify-between px-gutter-md py-gutter-sm rounded-md bg-accent-container/60 text-on-accent-container hover:bg-accent-container transition-colors duration-state-change">
            <div class="flex items-center gap-gutter-sm">
                <x-ui.icon name="door-open" class="w-4 h-4 text-accent" />
                <span data-detail="indoor" class="font-label text-label-md">{{ $building['indoor_label'] }}</span>
            </div>
            <x-ui.icon name="chevron-right" class="w-4 h-4 text-accent" />
        </a>

        <div class="grid grid-cols-2 gap-gutter-sm pt-gutter-xs">
            <button type="button" data-start-navigation class="inline-flex items-center justify-center gap-gutter-xs py-gutter-sm px-gutter-md rounded-md bg-primary text-on-primary hover:bg-primary/90">
                <x-ui.icon name="navigation" class="w-4 h-4" />
                <span class="font-label text-label-lg whitespace-nowrap">Mulai Navigasi</span>
            </button>
            <button type="button" class="inline-flex items-center justify-center py-gutter-sm px-gutter-md rounded-md bg-surface text-primary border border-border hover:bg-background">
                <span class="font-label text-label-lg whitespace-nowrap">Lihat Detail</span>
            </button>
        </div>
    </article>
</section>
