{{-- resources/views/components/landing/navbar.blade.php --}}
<nav
    x-data="{ open: false, scrolled: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
    :class="scrolled ? 'bg-white/95 shadow-soft' : 'bg-transparent'"
    class="navbar-blur fixed top-0 inset-x-0 z-50 transition-all duration-300"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-18">

            {{-- Logo --}}
             <a href="/" class="flex items-center gap-2.5 group">
                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-brand-600 to-brand-400 flex items-center justify-center shadow-brand/30 shadow-lg group-hover:scale-110 transition-transform">
                    <svg class="w-4.5 h-4.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/>
                    </svg>
                </div>
                <span class="font-display font-700 text-xl text-slate-900">WebPro<span class="gradient-text">Agency</span></span>
            </a>

            {{-- Desktop Nav --}}
            <div class="hidden lg:flex items-center gap-8">
                <a href="#solusi" class="text-sm font-medium text-slate-600 hover:text-brand-600 transition-colors">Solusi</a>
                <a href="#portfolio" class="text-sm font-medium text-slate-600 hover:text-brand-600 transition-colors">Portfolio</a>
                <a href="#harga" class="text-sm font-medium text-slate-600 hover:text-brand-600 transition-colors">Harga</a>
                <a href="#faq" class="text-sm font-medium text-slate-600 hover:text-brand-600 transition-colors">FAQ</a>
            </div>

            {{-- CTA --}}
            <div class="hidden lg:flex items-center gap-3">
                <a href="#harga" class="text-sm font-semibold text-brand-600 hover:text-brand-700 transition-colors">
                    Lihat Paket
                </a>
                <a
                    href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20konsultasi%20website%20company%20profile"
                    target="_blank"
                    class="inline-flex items-center gap-2 bg-brand-600 hover:bg-brand-700 text-white text-sm font-semibold px-4 py-2.5 rounded-xl shadow-brand/30 shadow-md hover:shadow-brand/50 transition-all duration-200 hover:-translate-y-0.5"
                >
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Konsultasi Gratis
                </a>
            </div>

            {{-- Mobile Hamburger --}}
            <button @click="open = !open" class="lg:hidden p-2 rounded-lg text-slate-600 hover:bg-slate-100 transition-colors">
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div
        x-show="open"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="lg:hidden bg-white border-t border-slate-100 shadow-medium"
    >
        <div class="max-w-7xl mx-auto px-4 py-4 flex flex-col gap-1">
            <a @click="open=false" href="#solusi" class="px-4 py-3 text-sm font-medium text-slate-700 hover:bg-brand-50 hover:text-brand-600 rounded-xl transition-colors">Solusi</a>
            <a @click="open=false" href="#portfolio" class="px-4 py-3 text-sm font-medium text-slate-700 hover:bg-brand-50 hover:text-brand-600 rounded-xl transition-colors">Portfolio</a>
            <a @click="open=false" href="#harga" class="px-4 py-3 text-sm font-medium text-slate-700 hover:bg-brand-50 hover:text-brand-600 rounded-xl transition-colors">Harga</a>
            <a @click="open=false" href="#faq" class="px-4 py-3 text-sm font-medium text-slate-700 hover:bg-brand-50 hover:text-brand-600 rounded-xl transition-colors">FAQ</a>
            <div class="pt-2 border-t border-slate-100 mt-2">
                <a
                    href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20konsultasi%20website%20company%20profile"
                    target="_blank"
                    class="flex items-center justify-center gap-2 bg-brand-600 text-white text-sm font-semibold px-4 py-3 rounded-xl"
                >
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Konsultasi Gratis via WhatsApp
                </a>
            </div>
        </div>
    </div>
</nav>