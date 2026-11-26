{{-- Pin gedung di atas peta mobile. Posisi (x,y) diambil dari config/campusmap.php --}}
@props(['buildings'])
@php
    $tones = [
        'primary' => 'bg-primary text-on-primary',
        'warning' => 'bg-warning text-on-primary',
    ];
@endphp

{{-- Posisi pengguna --}}
<div class="absolute left-[124px] top-[440px] -translate-x-1/2 -translate-y-1/2 pointer-events-none">
    <span class="w-10 h-10 rounded-full bg-accent/20 flex items-center justify-center">
        <span class="w-4 h-4 rounded-full bg-accent border-2 border-surface shadow-md"></span>
    </span>
</div>

@foreach ($buildings as $building)
    @continue(empty($building['marker']))
    @php $m = $building['marker']; @endphp

    @if (($m['tone'] ?? null) === 'featured')
        <button type="button" data-select-building="{{ $building['id'] }}" aria-label="Pilih {{ $building['name'] }}"
                style="left: {{ $m['x'] }}px; top: {{ $m['y'] }}px"
                class="absolute -translate-x-1/2 -translate-y-full flex flex-col items-center">
            <span class="px-gutter-sm py-gutter-xs rounded-full bg-surface text-primary font-label text-label-sm shadow-md border border-border mb-1 whitespace-nowrap">{{ $building['name'] }}</span>
            <span class="w-10 h-10 rounded-full bg-accent text-on-accent border-[3px] border-surface shadow-lg flex items-center justify-center ring-4 ring-accent/20">
                <x-ui.icon :name="$m['icon']" class="w-5 h-5" />
            </span>
        </button>
    @else
        <button type="button" data-select-building="{{ $building['id'] }}" aria-label="Pilih {{ $building['name'] }}"
                style="left: {{ $m['x'] }}px; top: {{ $m['y'] }}px"
                class="absolute -translate-x-1/2 -translate-y-1/2 w-8 h-8 rounded-full border-2 border-surface shadow-md flex items-center justify-center {{ $tones[$m['tone']] ?? $tones['primary'] }}">
            <x-ui.icon :name="$m['icon']" class="w-4 h-4" />
        </button>
    @endif
@endforeach
