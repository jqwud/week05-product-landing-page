@props([
    'title' => '',
    'price' => '',
    'note' => null,
    'cta' => 'Book Now',
    'href' => '#contact',
    'highlight' => false,
])

<div class="p-8 rounded-2xl {{ $highlight ? 'bg-clinic-magenta text-white' : 'bg-white border border-gray-200' }}">
    <h3 class="text-lg font-semibold {{ $highlight ? 'text-white' : 'text-gray-900' }}">{{ $title }}</h3>

    <div class="mt-3 flex items-baseline gap-1">
        <span class="text-3xl font-bold {{ $highlight ? 'text-white' : 'text-gray-900' }}">{{ $price }}</span>
    </div>

    @if ($note)
        <p class="mt-1 text-sm {{ $highlight ? 'text-pink-100' : 'text-gray-500' }}">{{ $note }}</p>
    @endif

    <ul class="mt-6 space-y-3">
        {{ $slot }}
    </ul>

    <x-button
        :variant="$highlight ? 'secondary' : 'outline'"
        :href="$href"
        class="mt-8 w-full"
    >
        {{ $cta }}
    </x-button>
</div>