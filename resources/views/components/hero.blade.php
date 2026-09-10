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

        {{-- Image with floating glass frame --}}
        <div class="relative">
            <div class="animate-float">
                <div class="p-3 rounded-3xl bg-white/50 backdrop-blur-md border border-white/60 shadow-2xl">
                    <img
                        src="{{ asset('images/clinic-storefront.jpg') }}"
                        alt="Arriola-Robles Children's Clinic storefront"
                        class="rounded-2xl w-full object-cover"
                    >
                </div>
            </div>

            {{-- Floating glass badge --}}
            <div class="absolute -bottom-6 -left-6 bg-white/70 backdrop-blur-md border border-white/60 rounded-2xl shadow-xl px-5 py-4">
                <p class="font-heading font-bold text-clinic-navy text-lg">₱250</p>
                <p class="text-xs text-gray-600">per consultation</p>
            </div>
        </div>

    </div>
</section>