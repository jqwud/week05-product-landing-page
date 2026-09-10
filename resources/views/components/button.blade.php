@props([
    'variant' => 'primary',
    'href' => null,
    'type' => 'button',
])

@php
    $base = 'inline-flex items-center justify-center px-7 py-3.5 rounded-full font-heading font-semibold text-center transition-all duration-300 ease-out hover:-translate-y-0.5 active:translate-y-0';

    $variants = [
        'primary'   => 'bg-gradient-to-r from-clinic-magenta to-pink-500 text-white shadow-lg shadow-pink-500/30 hover:shadow-xl hover:shadow-pink-500/40',
        'secondary' => 'bg-clinic-navy text-white shadow-lg shadow-blue-900/20 hover:shadow-xl',
        'outline'   => 'border-2 border-clinic-magenta text-clinic-magenta bg-white/70 backdrop-blur-sm hover:bg-clinic-magenta hover:text-white',
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