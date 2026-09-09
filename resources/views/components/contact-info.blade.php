@props(['label' => ''])

<div class="flex gap-4">
    <div class="w-10 h-10 shrink-0 rounded-full bg-clinic-blue/10 text-clinic-blue flex items-center justify-center">
        {{ $icon }}
    </div>
    <div>
        <p class="text-sm text-gray-500">{{ $label }}</p>
        <p class="text-gray-900 font-medium">{{ $slot }}</p>
    </div>
</div>