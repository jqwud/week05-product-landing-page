@props([
    'title' => '',
    'accent' => 'magenta', // magenta | yellow | navy
])

@php
    $accents = [
        'magenta' => 'bg-clinic-magenta/10 text-clinic-magenta',
        'yellow'  => 'bg-clinic-yellow/20 text-yellow-700',
        'navy'    => 'bg-clinic-navy/10 text-clinic-navy',
    ];
    $accentClasses = $accents[$accent] ?? $accents['magenta'];
@endphp

<div class="group p-6 rounded-2xl bg-white/60 backdrop-blur-md border border-white/60 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
    <div class="w-12 h-12 rounded-full flex items-center justify-center {{ $accentClasses }} mb-4 group-hover:scale-110 transition-transform duration-300">
        {{ $icon }}
    </div>
    <h3 class="font-heading text-lg font-semibold text-gray-900 mb-2">{{ $title }}</h3>
    <p class="text-gray-600 text-sm leading-relaxed">
        {{ $slot }}
    </p>
</div>