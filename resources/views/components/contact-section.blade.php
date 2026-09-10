<section id="contact" class="relative overflow-hidden py-16 md:py-24 bg-gray-50">

    {{-- Decorative background --}}
    <div class="absolute top-0 left-1/4 w-72 h-72 rounded-full bg-clinic-yellow/10 blur-3xl"></div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section heading --}}
        <x-section-title
            title="Visit or Call Us"
            subtitle="We're happy to answer any questions"
        />

        {{-- Main Contact Layout --}}
        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10 items-center">

            {{-- ========================================= --}}
            {{-- LEFT: STOREFRONT                          --}}
            {{-- ========================================= --}}
            <div class="w-full flex flex-col items-center justify-center">

                <div class="w-full max-w-xl rounded-3xl bg-white p-3 shadow-md">

                    <div class="overflow-hidden rounded-2xl">
                        <img
                            src="{{ asset('images/clinic-storefront.jpg') }}"
                            alt="Arriola-Robles Children's Clinic and Roncis Pharmacy storefront at night"
                            class="block w-full aspect-[4/3] object-cover"
                        >
                    </div>

                    <p class="px-3 pt-3 pb-1 text-center text-sm text-gray-500">
                        Look for this storefront along Brgy. Cabanbanan
                    </p>

                </div>

            </div>


            {{-- ========================================= --}}
            {{-- RIGHT: CONTACT DETAILS + HOURS            --}}
            {{-- ========================================= --}}
            <div class="flex flex-col gap-6">

                {{-- Contact Information --}}
                <div class="rounded-3xl bg-white p-6 md:p-8 shadow-md">

                    <div class="space-y-6">

                        {{-- Address --}}
                        <x-contact-info label="Address">
                            <x-slot:icon>
                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    class="w-5 h-5"
                                >
                                    <path d="M12 21s7-6.5 7-11a7 7 0 10-14 0c0 4.5 7 11 7 11z" />
                                    <circle cx="12" cy="10" r="2.5" />
                                </svg>
                            </x-slot:icon>

                            6CQM+CF6, Road, Brgy. Cabanbanan, Pagsanjan, Laguna
                        </x-contact-info>


                        {{-- Phone --}}
                        <x-contact-info label="Phone">
                            <x-slot:icon>
                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    class="w-5 h-5"
                                >
                                    <path d="M4 5c0 8.3 6.7 15 15 15l2-3.5-5-2-1.5 1.5c-2-1-4-3-5-5L11 9.5 9 4.5 5.5 3 4 5z" />
                                </svg>
                            </x-slot:icon>

                            0968-619-4586
                        </x-contact-info>

                    </div>

                </div>


                {{-- Get Directions --}}
                <x-button
                    variant="primary"
                    href="https://www.google.com/maps/search/?api=1&query=6CQM%2BCF6+Road+Brgy.+Cabanbanan+Pagsanjan+Laguna"
                    class="w-full justify-center"
                >
                    Get Directions
                </x-button>


                {{-- Clinic Hours --}}
                <div class="rounded-3xl bg-white p-6 md:p-8 shadow-md">

                    <h3 class="mb-5 font-heading text-lg font-semibold text-gray-900">
                        Clinic Hours
                    </h3>

                    <dl class="space-y-3 text-sm text-gray-600">

                        <div class="flex items-center justify-between gap-4">
                            <dt>Monday</dt>
                            <dd class="text-right">11:00 AM – 4:00 PM</dd>
                        </div>

                        <div class="flex items-center justify-between gap-4">
                            <dt>Tuesday</dt>
                            <dd class="text-right">9:00 AM – 11:00 AM</dd>
                        </div>

                        <div class="flex items-center justify-between gap-4">
                            <dt>Wednesday</dt>
                            <dd class="text-right">11:00 AM – 4:00 PM</dd>
                        </div>

                        <div class="flex items-center justify-between gap-4">
                            <dt>Thursday</dt>
                            <dd class="text-right">9:00 AM – 11:00 AM</dd>
                        </div>

                        <div class="flex items-center justify-between gap-4">
                            <dt>Friday</dt>
                            <dd class="text-right">11:00 AM – 4:00 PM</dd>
                        </div>

                        <div class="flex items-center justify-between gap-4">
                            <dt>Saturday</dt>
                            <dd class="font-medium text-gray-500">Closed</dd>
                        </div>

                        <div class="flex items-center justify-between gap-4">
                            <dt>Sunday</dt>
                            <dd class="font-medium text-gray-500">Closed</dd>
                        </div>

                    </dl>

                </div>

            </div>

        </div>

    </div>
</section>