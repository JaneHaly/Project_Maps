{{-- Atribut tambahan (mis. data-*) diteruskan ke <input>. $slot = tombol di sisi kanan. --}}
@props([
    'variant'     => 'desktop', // desktop | mobile
    'placeholder' => 'Cari gedung, ruangan, atau fasilitas...',
])
@php
    $surface = $variant === 'mobile'
        ? 'bg-surface/95 backdrop-blur-md border border-border shadow-sm'
        : 'bg-background border border-border focus-within:bg-surface focus-within:border-accent';
@endphp
<form role="search" class="flex items-center w-full h-11 rounded-full px-gutter-md {{ $surface }}">
    <x-ui.icon name="search" class="w-4 h-4 text-on-surface-muted shrink-0 mr-gutter-sm" />
    <input type="search" placeholder="{{ $placeholder }}"
           {{ $attributes->merge(['class' => 'w-full bg-transparent border-0 p-0 text-body-md text-on-surface placeholder:text-on-surface-muted focus:ring-0']) }}>
    {{ $slot }}
</form>
