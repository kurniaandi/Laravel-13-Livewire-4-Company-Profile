{{-- resources/views/components/landing/social-proof.blade.php --}}
<section class="py-16 bg-white border-y border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Stats Row --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-14">
            @foreach([
                ['number' => '150+', 'label' => 'UMKM Puas', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'color' => 'brand'],
                ['number' => '200+', 'label' => 'Project Selesai', 'icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z', 'color' => 'emerald'],
                ['number' => '4.9★', 'label' => 'Rating Rata-rata', 'icon' => 'M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z', 'color' => 'accent'],
                ['number' => '14 Hari', 'label' => 'Rata-rata Pengerjaan', 'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'color' => 'violet'],
            ] as $stat)
            <div class="animate-on-scroll text-center group">
                <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl mb-4
                    @if($stat['color'] === 'brand') bg-brand-50 group-hover:bg-brand-100
                    @elseif($stat['color'] === 'emerald') bg-emerald-50 group-hover:bg-emerald-100
                    @elseif($stat['color'] === 'accent') bg-accent-50 group-hover:bg-accent-100
                    @else bg-violet-50 group-hover:bg-violet-100
                    @endif transition-colors">
                    <svg class="w-7 h-7
                        @if($stat['color'] === 'brand') text-brand-500
                        @elseif($stat['color'] === 'emerald') text-emerald-500
                        @elseif($stat['color'] === 'accent') text-accent-500
                        @else text-violet-500
                        @endif" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $stat['icon'] }}"/>
                    </svg>
                </div>
                <div class="font-display text-4xl font-700 text-slate-900 mb-1">{{ $stat['number'] }}</div>
                <div class="text-sm text-slate-500 font-medium">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>

        {{-- Section Title --}}
        <div class="text-center mb-10 animate-on-scroll">
            <p class="text-sm font-semibold text-brand-600 uppercase tracking-widest mb-2">Testimonial</p>
            <h2 class="font-display text-3xl font-700 text-slate-900">Kata Mereka yang Sudah Pakai</h2>
        </div>

        {{-- Testimonials Grid --}}
        <div class="grid md:grid-cols-3 gap-6 stagger-children">
            @foreach($testimonials ?? [
                [
                    'name' => 'Pak Hendro Santoso',
                    'business' => 'Hendro Interior & Design',
                    'category' => 'Interior',
                    'avatar' => 'H',
                    'rating' => 5,
                    'text' => 'Sejak punya website, klien saya lebih percaya. Banyak yang langsung WA setelah lihat portfolio di website. Omzet naik 60% dalam 3 bulan pertama!',
                    'result' => '+60% Omzet',
                    'color' => 'brand',
                ],
                [
                    'name' => 'Bu Sari Dewi',
                    'business' => 'Sari Catering & Event',
                    'category' => 'Catering',
                    'avatar' => 'S',
                    'rating' => 5,
                    'text' => 'Tadinya cuma andalkan Instagram, susah dapat klien korporat. Setelah ada website profesional, sudah dapet 5 klien perusahaan besar bulan ini.',
                    'result' => '5 Klien Baru',
                    'color' => 'emerald',
                ],
                [
                    'name' => 'Dr. Rizal Fauzan',
                    'business' => 'Klinik Sehat Mandiri',
                    'category' => 'Klinik',
                    'avatar' => 'R',
                    'rating' => 5,
                    'text' => 'Website-nya clean, profesional banget. Pasien baru lebih mudah menemukan klinik kami di Google. Pendaftaran online via WhatsApp juga sangat membantu.',
                    'result' => '+120 Pasien Baru',
                    'color' => 'violet',
                ],
            ] as $testimonial)
            <div class="bg-white border border-slate-100 rounded-3xl p-6 shadow-soft card-hover">
                {{-- Stars --}}
                <div class="flex gap-0.5 mb-4">
                    @for($i = 0; $i < $testimonial['rating']; $i++)
                    <svg class="w-4 h-4 text-amber-400 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                    </svg>
                    @endfor
                </div>

                {{-- Quote --}}
                <blockquote class="text-slate-600 text-sm leading-relaxed mb-5">
                    "{{ $testimonial['text'] }}"
                </blockquote>

                {{-- Result Badge --}}
                <div class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-700 text-xs font-semibold px-3 py-1.5 rounded-full mb-5">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                    </svg>
                    {{ $testimonial['result'] }}
                </div>

                {{-- Author --}}
                <div class="flex items-center gap-3 pt-4 border-t border-slate-50">
                    <div class="w-10 h-10 rounded-2xl
                        @if($testimonial['color'] === 'brand') bg-brand-100 text-brand-600
                        @elseif($testimonial['color'] === 'emerald') bg-emerald-100 text-emerald-600
                        @else bg-violet-100 text-violet-600
                        @endif flex items-center justify-center font-bold text-sm">
                        {{ $testimonial['avatar'] }}
                    </div>
                    <div>
                        <div class="font-semibold text-sm text-slate-800">{{ $testimonial['name'] }}</div>
                        <div class="text-xs text-slate-500">{{ $testimonial['business'] }}</div>
                    </div>
                    <div class="ml-auto">
                        <span class="text-xs bg-slate-100 text-slate-500 px-2 py-1 rounded-lg font-medium">{{ $testimonial['category'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Logo Bar --}}
        <div class="mt-14 animate-on-scroll">
            <p class="text-center text-xs font-semibold text-slate-400 uppercase tracking-widest mb-6">Dipercaya oleh berbagai jenis UMKM</p>
            <div class="flex flex-wrap justify-center gap-3">
                @foreach(['🏗️ Kontraktor', '🛋️ Interior', '🍱 Catering', '✈️ Travel', '🏥 Klinik', '👗 Konveksi', '🪑 Furniture', '📸 Fotografer'] as $industry)
                <span class="inline-flex items-center gap-2 bg-slate-50 border border-slate-100 text-slate-600 text-sm font-medium px-4 py-2 rounded-full hover:bg-brand-50 hover:border-brand-100 hover:text-brand-700 transition-colors cursor-default">
                    {{ $industry }}
                </span>
                @endforeach
            </div>
        </div>
    </div>
</section>