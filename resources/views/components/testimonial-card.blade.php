@props([
    'name' => '',
    'relation' => '',
    'rating' => 5,
])

<div class="p-6 bg-white rounded-xl border border-gray-200">
    <div class="flex gap-1 text-clinic-yellow mb-3">
        @for ($i = 0; $i < 5; $i++)
            <svg viewBox="0 0 20 20" fill="{{ $i < $rating ? 'currentColor' : 'none' }}" stroke="currentColor" stroke-width="1" class="w-4 h-4">
                <path d="M10 1l2.6 5.6 6.1.6-4.6 4.2 1.3 6-5.4-3-5.4 3 1.3-6L1.3 7.2l6.1-.6L10 1z" />
            </svg>
        @endfor
    </div>
    <p class="text-gray-700 leading-relaxed">{{ $slot }}</p>
    <div class="mt-4">
        <p class="font-semibold text-gray-900">{{ $name }}</p>
        <p class="text-sm text-gray-500">{{ $relation }}</p>
    </div>
</div>