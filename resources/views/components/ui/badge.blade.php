@props(['variant' => 'accent'])
@php
    $variants = [
        'success' => 'bg-success-container text-on-success-container',
        'accent'  => 'bg-accent-container text-on-accent-container',
        'warning' => 'bg-warning-container text-on-warning-container',
    ];
@endphp
<span {{ $attributes->class(['px-gutter-sm py-0.5 rounded-full font-label text-label-sm', $variants[$variant] ?? $variants['accent']]) }}>{{ $slot }}</span>
