@props([
    'variant' => 'primary',
    'href' => null,
    'type' => 'button',
])

@php
    $base = 'inline-block px-6 py-3 rounded-lg font-semibold text-center transition duration-200';

    $variants = [
        'primary'   => 'bg-clinic-magenta text-white hover:bg-pink-700',
        'secondary' => 'bg-clinic-blue text-white hover:bg-blue-800',
        'outline'   => 'border-2 border-clinic-magenta text-clinic-magenta hover:bg-clinic-magenta hover:text-white',
    ];

    $classes = $base . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif