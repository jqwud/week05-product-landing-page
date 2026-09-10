<section id="features" class="relative overflow-hidden py-16 md:py-24 bg-gradient-to-b from-pink-50/50 to-white">

    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[40rem] h-[40rem] rounded-full bg-clinic-yellow/10 blur-3xl"></div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <x-section-title
            title="Our Services"
            subtitle="Comprehensive pediatric care and pharmacy services, all in one place"
        />

        <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <x-feature-card title="Pediatric Checkups" accent="magenta">
                <x-slot:icon>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                        <path d="M6 3v6a3 3 0 006 0V3" />
                        <path d="M9 12v2a5 5 0 005 5 5 5 0 005-5v-1" />
                        <circle cx="19" cy="8" r="2" />
                    </svg>
                </x-slot:icon>
                Regular health monitoring &amp; well-child visits.
            </x-feature-card>

            <x-feature-card title="Immunization" accent="navy">
                <x-slot:icon>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                        <path d="M18 3l3 3-2 2-3-3 2-2z" />
                        <path d="M16 5l-9 9v3h3l9-9" />
                        <path d="M13 8l3 3" />
                        <path d="M4 20l3-3" />
                    </svg>
                </x-slot:icon>
                Complete vaccination programs for children.
            </x-feature-card>

            <x-feature-card title="Sick-Child Care" accent="yellow">
                <x-slot:icon>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                        <path d="M12 14.5V5a2 2 0 10-4 0v9.5a4 4 0 104 0z" />
                        <circle cx="10" cy="18" r="1" />
                    </svg>
                </x-slot:icon>
                Professional treatment for common illnesses.
            </x-feature-card>

            <x-feature-card title="Expert Doctor" accent="magenta">
                <x-slot:icon>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                        <circle cx="12" cy="8" r="3" />
                        <path d="M6 20c0-3.3 2.7-6 6-6s6 2.7 6 6" />
                    </svg>
                </x-slot:icon>
                Dr. Rona Arriola Robles, RPh, M.D., DPPS.
            </x-feature-card>

            <x-feature-card title="On-Site Pharmacy" accent="navy">
                <x-slot:icon>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                        <rect x="2" y="9" width="20" height="6" rx="3" transform="rotate(-45 12 12)" />
                        <line x1="12" y1="7.5" x2="12" y2="16.5" transform="rotate(-45 12 12)" />
                    </svg>
                </x-slot:icon>
                Medicines available immediately after consultation.
            </x-feature-card>

            <x-feature-card title="Flexible Hours" accent="yellow">
                <x-slot:icon>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                        <circle cx="12" cy="12" r="9" />
                        <path d="M12 7v5l3 3" />
                    </svg>
                </x-slot:icon>
                Multiple clinic sessions throughout the week.
            </x-feature-card>

        </div>
    </div>
</section>