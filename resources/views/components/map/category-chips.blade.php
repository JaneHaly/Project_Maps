@props([
    'variant'    => 'desktop', // desktop = filter di sidebar | mobile = chip bergulir di atas peta
    'categories' => config('campusmap.categories'),
])
@if ($variant === 'mobile')
    <div class="flex items-center gap-gutter-xs overflow-x-auto no-scrollbar pb-1 pointer-events-auto">
        @foreach ($categories as $category)
            <button type="button" data-select-building="{{ $category['building'] }}"
                    class="shrink-0 inline-flex items-center gap-gutter-xs px-gutter-md py-gutter-xs rounded-full shadow-sm {{ $loop->first ? 'bg-primary text-on-primary' : 'bg-surface/95 text-on-surface border border-border' }}">
                <x-ui.icon :name="$category['icon']" :class="'w-3.5 h-3.5 ' . ($loop->first ? '' : $category['icon_class'])" />
                <span class="font-label text-label-md">{{ $category['label'] }}</span>
            </button>
        @endforeach
    </div>
@else
    <div class="flex flex-wrap gap-gutter-xs">
        @foreach ($categories as $category)
            <button type="button" data-category-chip
                    class="px-gutter-md py-gutter-xs rounded-full font-label text-label-sm {{ $loop->first ? 'bg-primary text-on-primary' : 'bg-surface border border-border text-on-surface' }}">{{ $category['label'] }}</button>
        @endforeach
    </div>
@endif
