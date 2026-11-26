<nav aria-label="Navigasi utama mobile"
     class="md:hidden fixed bottom-0 left-1/2 -translate-x-1/2 w-full max-w-[390px] z-30 bg-surface/95 backdrop-blur-md border-t border-border px-gutter-sm py-gutter-sm grid grid-cols-4 gap-gutter-xs">
    @foreach (config('campusmap.navigation') as $item)
        @php $active = $item['route'] && request()->routeIs($item['route']); @endphp
        <a href="{{ $item['route'] ? route($item['route']) : '#' }}"
           @if ($active) aria-current="page" @endif
           class="flex flex-col items-center justify-center gap-gutter-xs py-gutter-xs rounded-md {{ $active ? 'text-accent' : 'text-on-surface-muted hover:text-primary' }}">
            <x-ui.icon :name="$item['icon']" class="w-5 h-5" />
            <span class="font-label text-label-sm">{{ $item['mobile_label'] }}</span>
        </a>
    @endforeach
</nav>
