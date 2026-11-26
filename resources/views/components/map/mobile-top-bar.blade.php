{{-- Header melayang di atas peta (khusus mobile): logo, kampus, profil, pencarian, chip kategori --}}
<div class="relative z-20 pt-gutter-md px-page-margin flex flex-col gap-gutter-sm pointer-events-none">
    <header class="flex items-center justify-between gap-gutter-sm pointer-events-auto">
        <div class="bg-surface/95 backdrop-blur-md px-gutter-md py-gutter-xs rounded-full border border-border shadow-sm">
            <x-ui.logo size="sm" />
        </div>
        <div class="flex items-center gap-gutter-xs">
            <x-ui.campus-dropdown variant="mobile" />
            <button type="button" aria-label="Profil pengguna"
                    class="w-9 h-9 rounded-full bg-surface/95 backdrop-blur-md border border-border shadow-sm flex items-center justify-center text-primary">
                <x-ui.icon name="user" class="w-4 h-4" />
            </button>
        </div>
    </header>

    <div class="relative pointer-events-auto">
        <x-ui.search-input variant="mobile">
            <button type="button" aria-label="Filter" class="ml-gutter-xs p-gutter-xs text-on-surface-muted">
                <x-ui.icon name="sliders-horizontal" class="w-4 h-4" />
            </button>
        </x-ui.search-input>
    </div>

    <x-map.category-chips variant="mobile" />
</div>
