@props([
    'title' => '',
    'price' => '',
    'note' => null,
    'cta' => 'Book Now',
    'href' => '#contact',
    'highlight' => false,
])

<div class="group relative p-8 rounded-3xl transition-all duration-300 hover:-translate-y-2
    {{ $highlight
        ? 'bg-gradient-to-br from-clinic-magenta to-pink-500 text-white shadow-2xl shadow-pink-500/30'
        : 'bg-white/60 backdrop-blur-md border border-white/60 shadow-md hover:shadow-xl' }}">

    @if ($highlight)
        <span class="absolute -top-3 left-8 px-3 py-1 rounded-full bg-clinic-yellow text-clinic-navy text-xs font-heading font-bold shadow-md">
            Most Booked
        </span>
    @endif

    <h3 class="font-heading text-lg font-semibold {{ $highlight ? 'text-white' : 'text-gray-900' }}">{{ $title }}</h3>

    <div class="mt-3 flex items-baseline gap-1">
        <span class="font-display text-3xl font-bold {{ $highlight ? 'text-white' : 'text-gray-900' }}">{{ $price }}</span>
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