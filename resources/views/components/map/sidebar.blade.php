{{-- Sidebar kiri (tablet & desktop) + tombol untuk membukanya kembali. --}}
@props(['buildings'])
<aside data-sidebar class="w-[320px] lg:w-[376px] shrink-0 bg-surface border-r border-border flex flex-col z-20">
    <div class="p-gutter-lg border-b border-border flex flex-col gap-gutter-md">
        <div class="flex items-center justify-between gap-gutter-sm">
            <h1 class="font-title text-title-md text-on-surface">Eksplorasi Kampus</h1>
            <button type="button" data-sidebar-toggle aria-label="Sembunyikan sidebar"
                    class="p-gutter-xs rounded-sm text-on-surface-muted hover:bg-background hover:text-primary">
                <x-ui.icon name="panel-left-close" class="w-4 h-4" />
            </button>
        </div>

        <x-ui.search-input variant="desktop" data-sidebar-search="true" />
        <x-map.category-chips variant="desktop" />
    </div>

    <div class="flex-1 overflow-y-auto p-gutter-lg flex flex-col gap-gutter-md">
        @foreach ($buildings as $building)
            <x-map.building-card :building="$building" :active="$loop->first" />
        @endforeach
    </div>
</aside>

<button type="button" data-sidebar-expand aria-label="Tampilkan sidebar"
        class="hidden absolute left-gutter-lg top-gutter-lg z-30 w-11 h-11 rounded-full bg-surface border border-border shadow-md items-center justify-center text-primary hover:bg-background">
    <x-ui.icon name="panel-left-open" class="w-5 h-5" />
</button>
