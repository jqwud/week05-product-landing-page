@props([
    'title' => '',
    'subtitle' => null,
])

<div class="text-center max-w-2xl mx-auto">
    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">{{ $title }}</h2>
    @if ($subtitle)
        <p class="mt-4 text-gray-600 text-lg">{{ $subtitle }}</p>
    @endif
</div>