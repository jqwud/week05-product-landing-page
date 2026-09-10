<section id="home" class="relative overflow-hidden bg-[#FFFDF8] py-20 md:py-28">

    {{-- Soft organic background shapes — static, no neon pulse --}}
    <div class="absolute -top-16 -left-16 w-72 h-72 rounded-full bg-[#E7F6EF]"></div>
    <div class="absolute top-1/3 -right-10 w-64 h-64 rounded-full bg-[#FFF1C9]"></div>
    <div class="absolute bottom-0 left-1/4 w-40 h-40 rounded-full bg-[#FDE2DE] opacity-70"></div>

    {{-- Tiny scattered decorative dots --}}
    <div class="absolute top-20 right-1/3 w-3 h-3 rounded-full bg-[#8DBEDB]"></div>
    <div class="absolute bottom-24 right-1/4 w-2 h-2 rounded-full bg-[#F8C95B]"></div>
    <div class="absolute top-1/2 left-10 w-2.5 h-2.5 rounded-full bg-[#5BB8B0]"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-12 items-center">

        {{-- Text content --}}
        <div>
            <span class="inline-block px-4 py-1.5 rounded-full bg-[#DDF3EF] text-[#398E88] text-sm font-heading font-semibold">
                Healthcare made comfortable for little ones
            </span>
            <h1 class="mt-6 font-display text-4xl md:text-6xl font-bold text-[#263B3B] leading-tight">
                Growing Healthy,
                <span class="text-[#F47C72]">One Smile</span> at a Time
            </h1>
            <p class="mt-6 text-lg text-[#607272] max-w-md">
                Trusted pediatric clinic &amp; pharmacy serving Pagsanjan families — warm, welcoming care for every little one.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row gap-4">
                <a href="#contact" class="inline-flex items-center justify-center px-7 py-3.5 rounded-full font-heading font-semibold bg-[#5BB8B0] text-white shadow-[0_8px_30px_rgba(38,59,59,0.15)] hover:bg-[#398E88] hover:-translate-y-0.5 transition-all duration-300">
                    Book an Appointment
                </a>
                <a href="#features" class="inline-flex items-center justify-center px-7 py-3.5 rounded-full font-heading font-semibold border-2 border-[#5BB8B0] text-[#398E88] hover:bg-[#DDF3EF] hover:-translate-y-0.5 transition-all duration-300">
                    Explore Our Services
                </a>
            </div>
        </div>

        {{-- Mascot --}}
        <div class="relative flex justify-center md:justify-end">
            <div class="absolute w-72 h-72 md:w-96 md:h-96 rounded-full bg-[#E7F6EF]"></div>
            <img
                src="{{ asset('images/owl-mascot.png') }}"
                alt="Clinic mascot — a friendly owl doctor waving hello"
                class="relative w-64 md:w-80 animate-float drop-shadow-[0_20px_25px_rgba(38,59,59,0.12)]"
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