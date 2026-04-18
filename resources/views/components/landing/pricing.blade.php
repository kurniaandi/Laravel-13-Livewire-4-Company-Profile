{{-- resources/views/components/landing/pricing.blade.php --}}
<section id="harga" class="relative py-24 bg-gradient-to-b from-slate-50 via-white to-white overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(59,130,246,0.08),transparent_40%)]"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Header --}}
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 bg-brand-50 text-brand-600 text-xs font-bold uppercase tracking-[0.2em] px-4 py-2 rounded-full border border-brand-100 mb-5">
                💰 Paket Harga
            </span>

            <h2 class="font-display text-3xl sm:text-5xl font-bold text-slate-900 leading-tight mb-5">
                Pilih Paket Website
                <span class="block italic gradient-text">Sesuai Kebutuhan Bisnis</span>
            </h2>

            <p class="text-slate-600 text-lg leading-relaxed">
                Semua paket sudah termasuk <strong>domain .com, hosting 1 tahun, SSL gratis</strong>,
                dan support penuh agar bisnis Anda tampil profesional.
            </p>
        </div>

        {{-- Pricing Grid --}}
        <div class="grid lg:grid-cols-3 gap-8 items-stretch">
            {{-- Starter --}}
            <div class="group relative bg-white border border-slate-200 rounded-3xl p-8 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                <div class="mb-6">
                    <div class="w-14 h-14 bg-slate-100 rounded-2xl flex items-center justify-center mb-4 text-2xl">
                        🌱
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Starter</h3>
                    <p class="text-slate-500">Cocok untuk UMKM yang baru mulai online</p>
                </div>

                <div class="mb-8">
                    <div class="flex items-end gap-1">
                        <span class="text-5xl font-bold text-slate-900">1,5</span>
                        <span class="text-lg text-slate-600 font-semibold mb-1">Juta</span>
                    </div>
                    <p class="text-sm text-slate-400 mt-2">Sekali bayar • tanpa biaya tersembunyi</p>
                </div>

                <ul class="space-y-4 mb-8">
                    @foreach([
                        'Landing Page 1 halaman',
                        'Mobile Responsive',
                        'WhatsApp Button',
                        'Domain .com 1 tahun',
                        'Hosting 1 tahun',
                        'SSL HTTPS',
                        '3x revisi desain',
                    ] as $feature)
                    <li class="flex items-center gap-3 text-sm text-slate-700">
                        <svg class="w-5 h-5 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>

                <a href="https://wa.me/6281234567890"
                   target="_blank"
                   class="block w-full text-center bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold py-4 rounded-2xl transition-all duration-300">
                    Pilih Starter
                </a>
            </div>

            {{-- Growth --}}
            <div class="relative bg-brand-600 rounded-3xl p-8 shadow-2xl ring-1 ring-brand-400 scale-105">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                    <span class="bg-orange-500 text-white text-xs font-bold px-4 py-2 rounded-full shadow-lg">
                        🔥 PALING LARIS
                    </span>
                </div>

                <div class="mb-6">
                    <div class="w-14 h-14 bg-white/15 rounded-2xl flex items-center justify-center mb-4 text-2xl">
                        🚀
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Growth</h3>
                    <p class="text-brand-100">Paket ideal untuk bisnis berkembang</p>
                </div>

                <div class="mb-8">
                    <div class="flex items-end gap-1">
                        <span class="text-5xl font-bold text-white">3,5</span>
                        <span class="text-lg text-brand-100 font-semibold mb-1">Juta</span>
                    </div>
                    <p class="text-sm text-brand-200 mt-2">Best value untuk company profile</p>
                </div>

                <ul class="space-y-4 mb-8">
                    @foreach([
                        'Website 5-7 halaman',
                        'SEO On-page',
                        'Portfolio / Gallery',
                        'Google Maps',
                        'Form kontak',
                        'Live chat WhatsApp',
                        '5x revisi desain',
                        'Support 3 bulan',
                    ] as $feature)
                    <li class="flex items-center gap-3 text-sm text-white">
                        <svg class="w-5 h-5 text-white/80 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>

                <a href="https://wa.me/6281234567890"
                   target="_blank"
                   class="block w-full text-center bg-white text-brand-700 hover:bg-slate-100 font-bold py-4 rounded-2xl transition-all duration-300 shadow-lg">
                    Pilih Growth
                </a>
            </div>

            {{-- Premium --}}
            <div class="group relative bg-slate-900 rounded-3xl p-8 shadow-xl hover:-translate-y-2 transition-all duration-300">
                <div class="mb-6">
                    <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center mb-4 text-2xl">
                        💎
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Premium</h3>
                    <p class="text-slate-400">Untuk bisnis besar & sistem custom</p>
                </div>

                <div class="mb-8">
                    <div class="flex items-end gap-1">
                        <span class="text-5xl font-bold text-white">7,5</span>
                        <span class="text-lg text-slate-400 font-semibold mb-1">Juta</span>
                    </div>
                    <p class="text-sm text-slate-500 mt-2">Solusi enterprise + CMS</p>
                </div>

                <ul class="space-y-4 mb-8">
                    @foreach([
                        'Semua fitur Growth',
                        'CMS Laravel Admin',
                        'Blog management',
                        'Multi-user role',
                        'Analytics dashboard',
                        'Leads management',
                        'VPS Hosting',
                        'Priority support 6 bulan',
                    ] as $feature)
                    <li class="flex items-center gap-3 text-sm text-slate-300">
                        <svg class="w-5 h-5 text-brand-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>

                <a href="https://wa.me/6281234567890"
                   target="_blank"
                   class="block w-full text-center bg-brand-600 hover:bg-brand-700 text-white font-semibold py-4 rounded-2xl transition-all duration-300">
                    Pilih Premium
                </a>
            </div>
        </div>

        {{-- Bottom Guarantee --}}
        <div class="mt-16 grid md:grid-cols-3 gap-5">
            @foreach([
                ['icon' => '🛡️', 'title' => 'Garansi Kepuasan', 'desc' => 'Revisi sampai sesuai ekspektasi bisnis Anda.'],
                ['icon' => '⚡', 'title' => 'Pengerjaan Cepat', 'desc' => 'Website live sesuai timeline yang disepakati.'],
                ['icon' => '📞', 'title' => 'Support Fast Response', 'desc' => 'Tim support standby via WhatsApp setiap hari kerja.'],
            ] as $item)
            <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">
                <div class="text-3xl mb-3">{{ $item['icon'] }}</div>
                <h4 class="font-bold text-slate-900 mb-2">{{ $item['title'] }}</h4>
                <p class="text-sm text-slate-500 leading-relaxed">{{ $item['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>