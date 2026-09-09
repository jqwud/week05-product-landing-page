<section id="contact" class="py-16 md:py-24 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-12">

        <div>
            <x-section-title title="Visit or Call Us" subtitle="We're happy to answer any questions" />

            <div class="mt-10 space-y-6">
                <x-contact-info label="Address">
                    <x-slot:icon>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-5 h-5">
                            <path d="M12 21s7-6.5 7-11a7 7 0 10-14 0c0 4.5 7 11 7 11z" />
                            <circle cx="12" cy="10" r="2.5" />
                        </svg>
                    </x-slot:icon>
                    6CQM+CF6, Road, Brgy. Cabanbanan, Pagsanjan, Laguna
                </x-contact-info>

                <x-contact-info label="Phone">
                    <x-slot:icon>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-5 h-5">
                            <path d="M4 5c0 8.3 6.7 15 15 15l2-3.5-5-2-1.5 1.5c-2-1-4-3-5-5L11 9.5 9 4.5 5.5 3 4 5z" />
                        </svg>
                    </x-slot:icon>
                    0968-619-4586
                </x-contact-info>
            </div>

            <x-button
                variant="primary"
                href="https://www.google.com/maps/search/?api=1&query=6CQM%2BCF6+Road+Brgy.+Cabanbanan+Pagsanjan+Laguna"
                class="mt-8 inline-block"
            >
                Get Directions
            </x-button>
        </div>

        <div class="bg-white rounded-2xl border border-gray-200 p-8">
            <h3 class="font-semibold text-gray-900 mb-4">Clinic Hours</h3>
            <dl class="space-y-2 text-sm">
                <div class="flex justify-between"><dt class="text-gray-600">Monday</dt><dd>11:00 AM – 4:00 PM</dd></div>
                <div class="flex justify-between"><dt class="text-gray-600">Tuesday</dt><dd>9:00 AM – 11:00 AM</dd></div>
                <div class="flex justify-between"><dt class="text-gray-600">Wednesday</dt><dd>11:00 AM – 4:00 PM</dd></div>
                <div class="flex justify-between"><dt class="text-gray-600">Thursday</dt><dd>9:00 AM – 11:00 AM</dd></div>
                <div class="flex justify-between"><dt class="text-gray-600">Friday</dt><dd>11:00 AM – 4:00 PM</dd></div>
                <div class="flex justify-between"><dt class="text-gray-600">Saturday</dt><dd>Closed</dd></div>
                <div class="flex justify-between"><dt class="text-gray-600">Sunday</dt><dd>Closed</dd></div>
            </dl>
        </div>

    </div>
</section>