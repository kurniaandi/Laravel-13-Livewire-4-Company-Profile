{{-- resources/views/components/landing/solutions.blade.php --}}
<section id="solusi" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="text-center mb-14 animate-on-scroll">
            <span class="inline-block bg-brand-50 text-brand-600 text-xs font-semibold uppercase tracking-widest px-4 py-2 rounded-full border border-brand-100 mb-4">
                ✨ Yang Anda Dapatkan
            </span>
            <h2 class="font-display text-3xl sm:text-4xl font-700 text-slate-900 mb-4">
                Semua yang Bisnis Anda Butuhkan<br>
                <span class="gradient-text italic">Dalam Satu Website</span>
            </h2>
            <p class="text-slate-600 text-lg max-w-2xl mx-auto">
                Kami tidak hanya membuat website — kami membantu bisnis Anda tumbuh dengan kehadiran digital yang kuat dan terpercaya.
            </p>
        </div>

        {{-- Solutions Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16 stagger-children">
            @foreach([
                [
                    'icon' => 'M13 10V3L4 14h7v7l9-11h-7z',
                    'title' => 'Website Super Cepat',
                    'desc' => 'Dibangun dengan teknologi modern Laravel & optimasi gambar. Loading < 2 detik. Google PageSpeed 95+. Pengunjung tidak akan kabur karena loading lama.',
                    'badge' => '< 2s Loading',
                    'color' => 'brand',
                    'iconFill' => false,
                ],
                [
                    'icon' => 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z',
                    'title' => 'Mobile Responsive',
                    'desc' => 'Tampil sempurna di semua perangkat — HP, tablet, dan laptop. 80% pengunjung datang dari HP, jadi mobile-first adalah prioritas utama kami.',
                    'badge' => 'Semua Perangkat',
                    'color' => 'emerald',
                    'iconFill' => false,
                ],
                [
                    'icon' => 'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z',
                    'title' => 'SEO Google Optimized',
                    'desc' => 'On-page SEO lengkap: meta tags, schema markup, sitemap XML, robots.txt. Bisnis Anda mudah ditemukan saat calon pelanggan search di Google.',
                    'badge' => 'Rank #1 Google',
                    'color' => 'accent',
                    'iconFill' => false,
                ],
                [
                    'icon' => 'M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347',
                    'title' => 'Integrasi WhatsApp',
                    'desc' => 'Tombol WA langsung di website dengan pesan otomatis. Lead yang masuk langsung terhubung ke nomor WA Anda. Tidak ada leads yang terlewat.',
                    'badge' => 'Direct Leads',
                    'color' => 'green',
                    'iconFill' => true,
                ],
                [
                    'icon' => 'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z',
                    'title' => 'Showcase Portfolio',
                    'desc' => 'Gallery project dengan before-after, foto profesional, dan testimonial. Tunjukkan karya terbaik Anda dan jadikan calon klien yakin untuk menghubungi.',
                    'badge' => 'Visual Impact',
                    'color' => 'violet',
                    'iconFill' => false,
                ],
                [
                    'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                    'title' => 'SSL & Keamanan',
                    'desc' => 'HTTPS gratis, proteksi dari serangan siber, backup otomatis harian. Website Anda aman dan pengunjung merasa nyaman berbagi data kontak.',
                    'badge' => '100% Secure',
                    'color' => 'brand',
                    'iconFill' => false,
                ],
            ] as $solution)
            <div class="group bg-white border border-slate-100 rounded-3xl p-7 shadow-soft card-hover">
                <div class="w-14 h-14 rounded-2xl mb-5 flex items-center justify-center
                    @if($solution['color'] === 'brand') bg-brand-50 group-hover:bg-brand-100
                    @elseif($solution['color'] === 'emerald') bg-emerald-50 group-hover:bg-emerald-100
                    @elseif($solution['color'] === 'accent') bg-accent-50 group-hover:bg-accent-100
                    @elseif($solution['color'] === 'green') bg-green-50 group-hover:bg-green-100
                    @elseif($solution['color'] === 'violet') bg-violet-50 group-hover:bg-violet-100
                    @endif transition-colors">
                    <svg class="w-7 h-7
                        @if($solution['color'] === 'brand') text-brand-500
                        @elseif($solution['color'] === 'emerald') text-emerald-500
                        @elseif($solution['color'] === 'accent') text-accent-500
                        @elseif($solution['color'] === 'green') text-green-500
                        @elseif($solution['color'] === 'violet') text-violet-500
                        @endif" @if($solution['iconFill']) fill="currentColor" @else fill="none" stroke="currentColor" @endif viewBox="0 0 24 24">
                        <path @if(!$solution['iconFill']) stroke-linecap="round" stroke-linejoin="round" stroke-width="2" @endif d="{{ $solution['icon'] }}"/>
                    </svg>
                </div>
                <h3 class="font-bold text-slate-900 text-lg mb-2">{{ $solution['title'] }}</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">{{ $solution['desc'] }}</p>
                <span class="inline-flex items-center gap-1.5 text-xs font-semibold px-3 py-1.5 rounded-full
                    @if($solution['color'] === 'brand') bg-brand-50 text-brand-600
                    @elseif($solution['color'] === 'emerald') bg-emerald-50 text-emerald-600
                    @elseif($solution['color'] === 'accent') bg-accent-50 text-accent-600
                    @elseif($solution['color'] === 'green') bg-green-50 text-green-600
                    @elseif($solution['color'] === 'violet') bg-violet-50 text-violet-600
                    @endif">
                    ✓ {{ $solution['badge'] }}
                </span>
            </div>
            @endforeach
        </div>

        {{-- CTA Banner --}}
        <div class="animate-on-scroll bg-gradient-to-br from-brand-600 to-brand-800 rounded-3xl p-8 sm:p-10 text-center relative overflow-hidden">
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute -top-10 -right-10 w-48 h-48 bg-white/5 rounded-full blur-2xl"></div>
                <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-white/5 rounded-full blur-2xl"></div>
            </div>
            <div class="relative">
                <h3 class="font-display text-2xl sm:text-3xl font-700 text-white mb-3">
                    Siap Transform Bisnis Anda?
                </h3>
                <p class="text-brand-200 mb-7 max-w-xl mx-auto">
                    Konsultasi gratis 30 menit dengan tim kami. Kami analisa kebutuhan bisnis Anda dan rekomendasikan solusi terbaik.
                </p>
                <a
                    href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20konsultasi%20gratis%20untuk%20website%20bisnis%20saya"
                    target="_blank"
                    class="inline-flex items-center gap-2.5 bg-white text-brand-700 font-bold px-8 py-4 rounded-2xl hover:bg-brand-50 transition-all duration-200 hover:-translate-y-0.5 shadow-strong"
                >
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Chat WhatsApp Sekarang — Gratis!
                </a>
            </div>
        </div>
    </div>
</section>