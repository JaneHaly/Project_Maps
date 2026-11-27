<x-layouts.app title="CampusMap — Peta Utama">

    <div class="relative min-h-screen w-full max-w-[390px] md:max-w-none mx-auto bg-background overflow-hidden flex flex-col shadow-xl pb-24 md:pb-0">

        {{-- ===== TABLET & DESKTOP (768px+) ===== --}}
        <x-navigation.desktop-header />

        <div class="hidden md:flex relative flex-1 min-h-[calc(100vh-4rem)] overflow-hidden">
            <x-map.sidebar :buildings="$sidebarBuildings" />

            <main data-map data-zoom-step="0.1" class="relative flex-1 bg-background overflow-hidden">
                {{-- Container peta Leaflet --}}
                <div
                    data-leaflet-map
                    class="absolute inset-0 z-0"
                ></div>


                <x-map.controls variant="desktop" />
                <x-map.detail-card variant="desktop" :building="$selected" />
            </main>
        </div>

        {{-- ===== MOBILE (<768px) ===== --}}
        <main data-map data-zoom-step="0.12" class="md:hidden relative flex-1 min-h-screen w-full overflow-hidden">
            {{-- Container peta Leaflet mobile --}}
            <div
                data-leaflet-map
                data-map-mobile
                class="absolute inset-0 z-0"
            ></div>

            <x-map.mobile-top-bar />
            <x-map.controls variant="mobile" />
            <x-map.detail-card variant="mobile" :building="$selected" />
        </main>

        <x-navigation.bottom-nav />
    </div>

    {{-- Data gedung untuk JavaScript (dibaca oleh building-selector.js) --}}
    <script type="application/json" id="campusmap-buildings">{!! json_encode($clientPayload, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}</script>
</x-layouts.app>
