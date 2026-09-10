<nav x-data="{ mobileOpen: false, scrolled: false }"
     x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 20)"
     :class="scrolled ? 'bg-white/70 shadow-lg' : 'bg-white/40 shadow-none'"
     class="sticky top-0 z-50 backdrop-blur-xl border-b border-white/40 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">

            {{-- Logo --}}
            <a href="/" class="flex items-center gap-2">
                <span class="font-display text-xl font-bold text-clinic-magenta">Arriola-Robles</span>
                <span class="font-heading text-sm text-clinic-navy hidden sm:inline">Children's Clinic</span>
            </a>

            {{-- Desktop links --}}
            <div class="hidden md:flex items-center gap-8 font-heading text-sm">
                <a href="#home" class="relative text-gray-700 hover:text-clinic-magenta font-medium transition group">
                    Home
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-clinic-magenta transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#features" class="relative text-gray-700 hover:text-clinic-magenta font-medium transition group">
                    Features
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-clinic-magenta transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#pricing" class="relative text-gray-700 hover:text-clinic-magenta font-medium transition group">
                    Pricing
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-clinic-magenta transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#testimonials" class="relative text-gray-700 hover:text-clinic-magenta font-medium transition group">
                    Testimonials
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-clinic-magenta transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#contact" class="relative text-gray-700 hover:text-clinic-magenta font-medium transition group">
                    Contact
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-clinic-magenta transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>

            {{-- CTAs --}}
            <div class="hidden md:flex items-center gap-3">
                <x-button variant="outline" href="#contact">Book Appointment</x-button>
                <x-button variant="primary" href="#contact">Get Started</x-button>
            </div>

            {{-- Mobile menu button --}}
            <button @click="mobileOpen = !mobileOpen" class="md:hidden text-clinic-navy" aria-label="Toggle menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        {{-- Mobile dropdown --}}
        <div x-show="mobileOpen" x-cloak x-transition class="md:hidden pb-4 flex flex-col gap-4 font-heading">
            <a href="#home" @click="mobileOpen = false" class="text-gray-700 hover:text-clinic-magenta font-medium">Home</a>
            <a href="#features" @click="mobileOpen = false" class="text-gray-700 hover:text-clinic-magenta font-medium">Features</a>
            <a href="#pricing" @click="mobileOpen = false" class="text-gray-700 hover:text-clinic-magenta font-medium">Pricing</a>
            <a href="#testimonials" @click="mobileOpen = false" class="text-gray-700 hover:text-clinic-magenta font-medium">Testimonials</a>
            <a href="#contact" @click="mobileOpen = false" class="text-gray-700 hover:text-clinic-magenta font-medium">Contact</a>
            <x-button variant="outline" href="#contact">Book Appointment</x-button>
            <x-button variant="primary" href="#contact">Get Started</x-button>
        </div>
    </div>
</nav>