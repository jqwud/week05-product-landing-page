<section id="home" class="relative overflow-hidden bg-white py-20 md:py-28">

    {{-- Decorative blurred gradient blobs --}}
    <div class="absolute -top-24 -left-24 w-96 h-96 rounded-full bg-clinic-magenta/20 blur-3xl animate-pulse-glow"></div>
    <div class="absolute -bottom-32 -right-16 w-96 h-96 rounded-full bg-clinic-yellow/30 blur-3xl animate-pulse-glow" style="animation-delay: 2s;"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-12 items-center">

        {{-- Text content --}}
        <div>
            <span class="inline-block px-4 py-1.5 rounded-full bg-white/70 backdrop-blur-sm border border-clinic-magenta/20 text-clinic-magenta text-sm font-heading font-semibold">
                Ang Botika ni Dok!
            </span>
            <h1 class="mt-6 font-display text-4xl md:text-6xl font-bold text-gray-900 leading-tight">
                Care for Your Child,
                <span class="text-clinic-magenta">With Confidence</span>
            </h1>
            <p class="mt-6 text-lg text-gray-600 max-w-md">
                Trusted pediatric clinic &amp; pharmacy serving Pagsanjan families.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row gap-4">
                <x-button variant="primary" href="#contact">Book Appointment Now</x-button>
                <x-button variant="outline" href="tel:09686194586">Call Us</x-button>
            </div>
        </div>

        {{-- Mascot --}}
        <div class="relative flex justify-center md:justify-end">
            <img
                src="{{ asset('images/owl-mascot.png') }}"
                alt="Clinic mascot — a friendly owl doctor waving hello"
                class="relative w-64 md:w-80 animate-float drop-shadow-2xl"
            >

            {{-- Small floating trust badge --}}
            <div class="absolute -bottom-2 -left-2 md:left-0 bg-white rounded-2xl shadow-[0_12px_35px_rgba(38,59,59,0.10)] px-5 py-3 flex items-center gap-2">
                <div class="flex text-[#F8C95B]">
                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path d="M10 1l2.6 5.6 6.1.6-4.6 4.2 1.3 6-5.4-3-5.4 3 1.3-6L1.3 7.2l6.1-.6L10 1z"/></svg>
                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path d="M10 1l2.6 5.6 6.1.6-4.6 4.2 1.3 6-5.4-3-5.4 3 1.3-6L1.3 7.2l6.1-.6L10 1z"/></svg>
                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path d="M10 1l2.6 5.6 6.1.6-4.6 4.2 1.3 6-5.4-3-5.4 3 1.3-6L1.3 7.2l6.1-.6L10 1z"/></svg>
                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path d="M10 1l2.6 5.6 6.1.6-4.6 4.2 1.3 6-5.4-3-5.4 3 1.3-6L1.3 7.2l6.1-.6L10 1z"/></svg>
                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path d="M10 1l2.6 5.6 6.1.6-4.6 4.2 1.3 6-5.4-3-5.4 3 1.3-6L1.3 7.2l6.1-.6L10 1z"/></svg>
                </div>
                <span class="text-xs text-[#607272] font-medium">Trusted by Pagsanjan families</span>
            </div>
        </div>

    </div>
</section>