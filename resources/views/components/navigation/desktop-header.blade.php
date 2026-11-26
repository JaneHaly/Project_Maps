@php
    $items = collect(config('campusmap.navigation'))->filter(fn ($item) => $item['desktop'] ?? true);
@endphp
<header class="hidden md:flex sticky top-0 z-30 h-16 bg-surface border-b border-border px-gutter-lg lg:px-gutter-xl items-center justify-between gap-gutter-md">
    <div class="flex items-center gap-gutter-xl">
        <a href="{{ route('map') }}" class="shrink-0"><x-ui.logo /></a>

        <nav aria-label="Navigasi utama" class="flex items-center gap-gutter-xs">
            @foreach ($items as $item)
                @php $active = $item['route'] && request()->routeIs($item['route']); @endphp
                <a href="{{ $item['route'] ? route($item['route']) : '#' }}"
                   @if ($active) aria-current="page" @endif
                   class="inline-flex items-center gap-gutter-xs px-gutter-md py-gutter-sm rounded-md whitespace-nowrap {{ $active ? 'bg-accent-container text-on-accent-container' : 'text-on-surface hover:bg-background transition-colors duration-state-change' }}">
                    <x-ui.icon :name="$item['icon']" :class="'w-4 h-4 ' . ($active ? '' : 'text-on-surface-muted')" />
                    <span class="font-label text-label-md">{{ $item['label'] }}</span>
                </a>
            @endforeach
        </nav>
    </div>

    <div class="flex items-center gap-gutter-sm shrink-0">
        <x-ui.campus-dropdown variant="desktop" />
        <button type="button" aria-label="Profil pengguna"
                class="w-10 h-10 rounded-full bg-surface border border-border flex items-center justify-center text-primary hover:bg-background">
            <x-ui.icon name="user" class="w-4 h-4" />
        </button>
    </div>
</header>
