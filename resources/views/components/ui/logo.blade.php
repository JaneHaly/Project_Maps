@props(['size' => 'md'])
<span {{ $attributes->class(['inline-flex items-center gap-gutter-sm']) }}>
    <img src="{{ asset('images/logo.png') }}" alt="Logo CampusMap"
         class="{{ $size === 'sm' ? 'w-6 h-6' : 'w-8 h-8' }} rounded-sm object-cover">
    <span class="font-title text-title-md text-primary">CampusMap</span>
</span>
