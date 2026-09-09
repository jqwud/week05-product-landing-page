<section id="testimonials" class="py-16 md:py-24 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <x-section-title
            title="What Families Say"
            subtitle="Trusted by families in Pagsanjan for pediatric care"
        />

        <div class="mt-12 grid md:grid-cols-3 gap-6">

            <x-testimonial-card name="[Facebook reviewer name]" relation="Parent, Facebook review" :rating="5">
                [Paste the actual Facebook review text here]
            </x-testimonial-card>

            <x-testimonial-card name="[Your name]" relation="Patient" :rating="5">
                [Write your own testimony as a patient here]
            </x-testimonial-card>

            <x-testimonial-card name="[Sister's name]" relation="Patient" :rating="5">
                [Write your sister's testimony here, with her consent]
            </x-testimonial-card>

        </div>
    </div>
</section>