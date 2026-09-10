@props(['label' => ''])

<div class="flex gap-4">
    <div class="w-11 h-11 shrink-0 rounded-full bg-clinic-magenta/10 text-clinic-magenta flex items-center justify-center">
        {{ $icon }}
    </div>
    <div>
        <p class="text-sm text-gray-500">{{ $label }}</p>
        <p class="text-gray-900 font-heading font-medium">{{ $slot }}</p>
    </div>
</div>