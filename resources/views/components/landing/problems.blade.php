{{-- resources/views/components/landing/problems.blade.php --}}
<section class="py-20 bg-slate-900 relative overflow-hidden">
    {{-- Decorations --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 left-1/4 w-72 h-72 bg-brand-600/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-64 h-64 bg-red-500/8 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        {{-- Header --}}
        <div class="text-center mb-14 animate-on-scroll">
            <span class="inline-block bg-red-500/10 text-red-400 text-xs font-semibold uppercase tracking-widest px-4 py-2 rounded-full border border-red-500/20 mb-4">
                😓 Masalah yang Sering Dialami UMKM
            </span>
            <h2 class="font-display text-3xl sm:text-4xl font-700 text-white mb-4">
                Apakah Bisnis Anda <br>
                <span class="text-red-400 italic">Mengalami Ini?</span>
            </h2>
            <p class="text-slate-400 text-lg max-w-2xl mx-auto">
                Banyak UMKM kehilangan calon pelanggan karena tidak punya kehadiran online yang profesional.
            </p>
        </div>

        {{-- Problems Grid --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 stagger-children">
            @foreach([
                [
                    'icon' => '📱',
                    'title' => 'Hanya Andalkan Instagram',
                    'desc' => 'Instagram bagus, tapi tidak cukup untuk terlihat profesional di mata klien korporat dan tender proyek besar.',
                    'pain' => 'Sulit dapat klien besar',
                ],
                [
                    'icon' => '🤔',
                    'title' => 'Customer Kurang Percaya',
                    'desc' => 'Calon pelanggan ragu dan tidak yakin karena tidak ada website resmi yang bisa dikunjungi untuk verifikasi bisnis Anda.',
                    'pain' => 'Konversi rendah',
                ],
                [
                    'icon' => '📉',
                    'title' => 'Sulit Tampil Profesional',
                    'desc' => 'Sulit bersaing dengan bisnis yang sudah punya website modern saat presentasi ke klien atau mengikuti tender.',
                    'pain' => 'Kalah di negosiasi',
                ],
                [
                    'icon' => '🏃',
                    'title' => 'Kalah dari Kompetitor',
                    'desc' => 'Kompetitor yang punya website profesional lebih mudah ditemukan di Google dan terlihat lebih terpercaya.',
                    'pain' => 'Kehilangan market share',
                ],
            ] as $problem)
            <div class="bg-white/5 border border-white/10 rounded-3xl p-6 hover:bg-white/8 transition-colors group">
                <div class="text-4xl mb-4">{{ $problem['icon'] }}</div>
                <h3 class="font-semibold text-white text-lg mb-2">{{ $problem['title'] }}</h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-4">{{ $problem['desc'] }}</p>
                <div class="inline-flex items-center gap-1.5 bg-red-500/10 text-red-400 text-xs font-medium px-3 py-1.5 rounded-full border border-red-500/20">
                    <span class="w-1.5 h-1.5 rounded-full bg-red-400 flex-shrink-0"></span>
                    {{ $problem['pain'] }}
                </div>
            </div>
            @endforeach
        </div>

        {{-- Transition --}}
        <div class="text-center mt-14 animate-on-scroll">
            <div class="inline-flex items-center gap-3 text-slate-400">
                <div class="h-px w-16 bg-slate-700"></div>
                <span class="text-lg font-semibold">Tapi tenang, ada solusinya 👇</span>
                <div class="h-px w-16 bg-slate-700"></div>
            </div>
        </div>
    </div>
</section>