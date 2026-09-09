<section id="home" class="bg-gradient-to-b from-pink-50 to-white py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-12 items-center">

        {{-- Text content --}}
        <div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
                Care for Your Child, <span class="text-clinic-magenta">With Confidence</span>
            </h1>
            <p class="mt-6 text-lg text-gray-600">
                Trusted pediatric clinic &amp; pharmacy serving Pagsanjan families.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row gap-4">
                <x-button variant="primary" href="#contact">Book Appointment Now</x-button>
                <x-button variant="outline" href="tel:09686194586">Call Us</x-button>
            </div>
        </div>

        {{-- Image --}}
        <div>
            <img
                src="{{ asset('images/clinic-storefront.jpg') }}"
                alt="Arriola-Robles Children's Clinic storefront"
                class="rounded-2xl shadow-xl w-full object-cover"
            >
        </div>

    </div>
</section>