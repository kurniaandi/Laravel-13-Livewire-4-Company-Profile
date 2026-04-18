{{-- resources/views/components/landing/portfolio.blade.php --}}
<section id="portfolio" class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="text-center mb-12 animate-on-scroll">
            <span class="inline-block bg-brand-50 text-brand-600 text-xs font-semibold uppercase tracking-widest px-4 py-2 rounded-full border border-brand-100 mb-4">
                🏆 Portfolio Kami
            </span>
            <h2 class="font-display text-3xl sm:text-4xl font-700 text-slate-900 mb-4">
                Website yang Sudah Kami Buat
            </h2>
            <p class="text-slate-600 text-lg max-w-xl mx-auto">
                Setiap website dirancang khusus sesuai karakter dan kebutuhan bisnis — bukan template generik.
            </p>
        </div>

        {{-- Filter Tabs --}}
        <div class="flex flex-wrap justify-center gap-2 mb-10 animate-on-scroll" x-data="{ active: 'semua' }">
            @foreach(['semua' => 'Semua', 'kontraktor' => 'Kontraktor', 'interior' => 'Interior', 'catering' => 'Catering', 'klinik' => 'Klinik', 'travel' => 'Travel', 'konveksi' => 'Konveksi'] as $key => $label)
            <button
                @click="active = '{{ $key }}'"
                :class="active === '{{ $key }}' ? 'bg-brand-600 text-white shadow-brand/30 shadow-md' : 'bg-white text-slate-600 border border-slate-200 hover:border-brand-200'"
                class="px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-200"
            >
                {{ $label }}
            </button>
            @endforeach
        </div>

        {{-- Portfolio Grid --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 stagger-children">
            @foreach($portfolios ?? [
                ['title' => 'Bangunan Jaya Konstruksi', 'category' => 'Kontraktor', 'slug' => 'kontraktor', 'result' => '+85% Leads dari Google', 'tech' => ['Laravel', 'SEO', 'WA Integration'], 'color' => 'blue', 'emoji' => '🏗️', 'desc' => 'Website company profile premium untuk kontraktor gedung dan renovasi rumah di Jakarta.'],
                ['title' => 'Aresta Interior Studio', 'category' => 'Interior', 'slug' => 'interior', 'result' => '12 Klien Baru/Bulan', 'tech' => ['Portfolio', 'Gallery', 'Before-After'], 'color' => 'amber', 'emoji' => '🛋️', 'desc' => 'Showcase portfolio desain interior mewah dengan galeri project lengkap dan budget estimator.'],
                ['title' => 'Sari Rasa Catering', 'category' => 'Catering', 'slug' => 'catering', 'result' => 'Klien Korporat +5/bulan', 'tech' => ['Menu Digital', 'Order WA', 'SEO'], 'color' => 'emerald', 'emoji' => '🍱', 'desc' => 'Website catering dengan menu digital interaktif, kalkulasi harga otomatis, dan sistem pemesanan WA.'],
                ['title' => 'Medika Sehat Klinik', 'category' => 'Klinik', 'slug' => 'klinik', 'result' => '+120 Pasien Baru', 'tech' => ['Booking Online', 'Dokter Profile', 'Maps'], 'color' => 'red', 'emoji' => '🏥', 'desc' => 'Website klinik lengkap dengan profil dokter, jadwal praktek, dan sistem antrian online WhatsApp.'],
                ['title' => 'Explore Nusantara Tour', 'category' => 'Travel', 'slug' => 'travel', 'result' => '+200% Booking Online', 'tech' => ['Paket Wisata', 'Galeri', 'WhatsApp'], 'color' => 'cyan', 'emoji' => '✈️', 'desc' => 'Portal travel agent dengan katalog paket wisata, galeri destinasi, dan booking sistem WhatsApp.'],
                ['title' => 'Batik Indah Konveksi', 'category' => 'Konveksi', 'slug' => 'konveksi', 'result' => 'Tender Pemerintah +3', 'tech' => ['Katalog', 'Custom Order', 'B2B'], 'color' => 'purple', 'emoji' => '👗', 'desc' => 'Website konveksi profesional dengan katalog produk, sistem custom order, dan halaman tender B2B.'],
            ] as $project)
            <div class="group bg-white rounded-3xl overflow-hidden shadow-soft card-hover border border-slate-100">

                {{-- Thumbnail --}}
                <div class="relative h-52 overflow-hidden
                    @if($project['color'] === 'blue') bg-gradient-to-br from-brand-100 to-brand-200
                    @elseif($project['color'] === 'amber') bg-gradient-to-br from-amber-100 to-amber-200
                    @elseif($project['color'] === 'emerald') bg-gradient-to-br from-emerald-100 to-emerald-200
                    @elseif($project['color'] === 'red') bg-gradient-to-br from-red-100 to-red-200
                    @elseif($project['color'] === 'cyan') bg-gradient-to-br from-cyan-100 to-cyan-200
                    @elseif($project['color'] === 'purple') bg-gradient-to-br from-purple-100 to-purple-200
                    @endif">

                    {{-- Mockup browser preview --}}
                    <div class="absolute inset-0 flex items-center justify-center p-6">
                        <div class="w-full bg-white rounded-xl shadow-medium overflow-hidden">
                            {{-- Browser bar --}}
                            <div class="flex items-center gap-1.5 px-3 py-2 bg-slate-100">
                                <div class="w-2 h-2 rounded-full bg-red-400"></div>
                                <div class="w-2 h-2 rounded-full bg-yellow-400"></div>
                                <div class="w-2 h-2 rounded-full bg-green-400"></div>
                                <div class="flex-1 bg-white rounded h-4 ml-1 flex items-center px-2">
                                    <span class="text-slate-400 text-[8px]">{{ strtolower(str_replace(' ', '', $project['title'])) }}.com</span>
                                </div>
                            </div>
                            {{-- Fake website content --}}
                            <div class="p-3">
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="text-2xl">{{ $project['emoji'] }}</span>
                                    <div>
                                        <div class="h-2 bg-slate-800 rounded w-24 mb-1"></div>
                                        <div class="h-1.5 bg-slate-300 rounded w-16"></div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-1.5">
                                    <div class="h-8 bg-slate-50 border border-slate-100 rounded"></div>
                                    <div class="h-8 bg-slate-50 border border-slate-100 rounded"></div>
                                    <div class="h-8 bg-slate-50 border border-slate-100 rounded"></div>
                                    <div class="h-8 bg-slate-50 border border-slate-100 rounded"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Category Badge --}}
                    <div class="absolute top-4 left-4">
                        <span class="bg-white/90 text-slate-700 text-xs font-semibold px-3 py-1.5 rounded-full shadow-sm backdrop-blur-sm">
                            {{ $project['emoji'] }} {{ $project['category'] }}
                        </span>
                    </div>
                </div>

                {{-- Content --}}
                <div class="p-6">
                    <h3 class="font-bold text-slate-900 text-lg mb-1">{{ $project['title'] }}</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4">{{ $project['desc'] }}</p>

                    {{-- Result --}}
                    <div class="flex items-center gap-2 mb-4 p-3 bg-emerald-50 rounded-xl border border-emerald-100">
                        <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                        <span class="text-emerald-700 text-sm font-semibold">{{ $project['result'] }}</span>
                    </div>

                    {{-- Tech Tags --}}
                    <div class="flex flex-wrap gap-1.5">
                        @foreach($project['tech'] as $tech)
                        <span class="text-xs bg-slate-100 text-slate-600 px-2.5 py-1 rounded-lg font-medium">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- CTA --}}
        <div class="text-center mt-12 animate-on-scroll">
            <p class="text-slate-600 mb-4">Ingin bisnis Anda menjadi project berikutnya?</p>
            <a
                href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20diskusi%20pembuatan%20website%20untuk%20bisnis%20saya"
                target="_blank"
                class="inline-flex items-center gap-2 bg-brand-600 hover:bg-brand-700 text-white font-semibold px-7 py-3.5 rounded-2xl shadow-brand/30 shadow-md hover:shadow-brand/50 transition-all duration-200 hover:-translate-y-0.5"
            >
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                Diskusi Project Anda
            </a>
        </div>
    </div>
</section>