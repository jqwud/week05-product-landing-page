@props([
    'title' => '',
    'accent' => 'magenta', // magenta | blue | yellow
])

@php
    $accents = [
        'magenta' => 'bg-clinic-magenta/10 text-clinic-magenta',
        'blue'    => 'bg-clinic-blue/10 text-clinic-blue',
        'yellow'  => 'bg-yellow-100 text-yellow-700',
    ];
    $accentClasses = $accents[$accent] ?? $accents['magenta'];
@endphp

<div class="py-6 border-t border-gray-200 first:border-t-0">
    <div class="flex gap-4">
        <div class="w-11 h-11 shrink-0 rounded-full flex items-center justify-center {{ $accentClasses }}">
            {{ $icon }}
        </div>
        <div>
            <h3 class="text-lg font-semibold text-gray-900 mb-1">{{ $title }}</h3>
            <p class="text-gray-600 text-sm leading-relaxed">{{ $slot }}</p>
        </div>
    </div>
</div>