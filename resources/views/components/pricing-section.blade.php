<section id="pricing" class="relative overflow-hidden py-16 md:py-24 bg-white">

    <div class="absolute -bottom-32 left-1/2 -translate-x-1/2 w-[36rem] h-[36rem] rounded-full bg-clinic-magenta/10 blur-3xl"></div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <x-section-title
            title="Our Services & Investment"
            subtitle="Simple, transparent pricing for consultations and pharmacy products"
        />

        <div class="mt-12 grid md:grid-cols-3 gap-6 items-start">

            <x-pricing-card
                title="Clinic Consultation"
                price="₱250"
                note="Per visit — medicines & vaccines not included"
                cta="Book Now"
                href="#contact"
                :highlight="true"
            >
                <li class="flex items-start gap-2 text-sm text-pink-100">
                    <span class="mt-2 w-1.5 h-1.5 rounded-full bg-white shrink-0"></span>
                    Medical check-up & diagnosis
                </li>
                <li class="flex items-start gap-2 text-sm text-pink-100">
                    <span class="mt-2 w-1.5 h-1.5 rounded-full bg-white shrink-0"></span>
                    Personalized treatment plan
                </li>
                <li class="flex items-start gap-2 text-sm text-pink-100">
                    <span class="mt-2 w-1.5 h-1.5 rounded-full bg-white shrink-0"></span>
                    Follow-up guidance
                </li>
            </x-pricing-card>

            <x-pricing-card
                title="Immunization"
                price="Market rates"
                note="Varies by vaccine type"
                cta="Schedule Vaccination"
                href="#contact"
            >
                <li class="flex items-start gap-2 text-sm text-gray-600">
                    <span class="mt-2 w-1.5 h-1.5 rounded-full bg-clinic-navy shrink-0"></span>
                    Professional administration
                </li>
                <li class="flex items-start gap-2 text-sm text-gray-600">
                    <span class="mt-2 w-1.5 h-1.5 rounded-full bg-clinic-navy shrink-0"></span>
                    Health records kept on file
                </li>
                <li class="flex items-start gap-2 text-sm text-gray-600">
                    <span class="mt-2 w-1.5 h-1.5 rounded-full bg-clinic-navy shrink-0"></span>
                    Guidance on vaccine schedules
                </li>
            </x-pricing-card>

            <x-pricing-card
                title="Pharmacy Products"
                price="Varies"
                note="Prescription, OTC & baby items"
                cta="Visit Pharmacy"
                href="#contact"
            >
                <li class="flex items-start gap-2 text-sm text-gray-600">
                    <span class="mt-2 w-1.5 h-1.5 rounded-full bg-clinic-yellow shrink-0"></span>
                    Wide product selection
                </li>
                <li class="flex items-start gap-2 text-sm text-gray-600">
                    <span class="mt-2 w-1.5 h-1.5 rounded-full bg-clinic-yellow shrink-0"></span>
                    Expert pharmacist advice
                </li>
                <li class="flex items-start gap-2 text-sm text-gray-600">
                    <span class="mt-2 w-1.5 h-1.5 rounded-full bg-clinic-yellow shrink-0"></span>
                    Baby & medical supplies
                </li>
            </x-pricing-card>

        </div>
    </div>
</section>