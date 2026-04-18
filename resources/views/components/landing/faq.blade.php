{{-- resources/views/components/landing/faq.blade.php --}}
<section id="faq" class="py-20 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-14 animate-on-scroll">
            <span class="inline-block bg-brand-50 text-brand-600 text-xs font-semibold uppercase tracking-widest px-4 py-2 rounded-full border border-brand-100 mb-4">
               FAQ
            </span>
            <h2 class="font-display text-3xl sm:text-4xl font-700 text-slate-900 mb-4">
                Pertanyaan yang Sering Ditanya
            </h2>
            <p class="text-slate-600 text-lg">
                Tidak menemukan jawaban yang dicari? Langsung chat kami via WhatsApp.
            </p>
        </div>

        <div class="space-y-3 animate-on-scroll" x-data="{ open: 0 }">
            @foreach([
                [
                    'q' => 'Berapa lama proses pengerjaan website?',
                    'a' => 'Tergantung paket yang dipilih. Paket Starter selesai dalam 7-10 hari kerja, Growth 14-21 hari, dan Premium 21-30 hari. Timeline ini termasuk proses diskusi desain, pengerjaan, review, dan revisi. Kami selalu memberikan estimasi waktu yang akurat di awal dan berkomitmen untuk menyelesaikan tepat waktu.',
                ],
                [
                    'q' => 'Apakah website bisa dikustomisasi sesuai brand saya?',
                    'a' => 'Tentu saja! Kami tidak menggunakan template generik. Setiap website kami rancang dari awal berdasarkan brand guideline, warna, dan karakter bisnis Anda. Kami akan meminta brief desain, logo, dan referensi visual yang Anda suka sebelum mulai pengerjaan.',
                ],
                [
                    'q' => 'Apakah domain dan hosting sudah termasuk?',
                    'a' => 'Ya, semua paket sudah termasuk domain .com untuk 1 tahun pertama dan hosting dengan uptime 99.9%. Setelah tahun pertama, biaya perpanjangan domain sekitar Rp 200rb/tahun dan hosting mulai Rp 400rb/tahun (tergantung paket). Kami juga bisa bantu setup jika Anda sudah memiliki domain sendiri.',
                ],
                [
                    'q' => 'Berapa kali saya bisa minta revisi?',
                    'a' => 'Starter: 3x revisi, Growth: 5x revisi, Premium: unlimited revisi selama 30 hari pengerjaan. Yang dimaksud revisi adalah perubahan konten, warna, layout, atau penambahan fitur kecil. Perubahan besar yang mengubah konsep desain awal akan dibicarakan terlebih dahulu.',
                ],
                [
                    'q' => 'Apakah saya bisa update konten website sendiri?',
                    'a' => 'Untuk paket Premium, sudah termasuk Admin Panel CMS sehingga Anda bisa update teks, gambar, dan konten sendiri tanpa perlu coding. Paket Starter dan Growth, update konten bisa melalui kami (ada biaya update jika di luar periode support). Kami juga menyediakan training untuk tim Anda.',
                ],
                [
                    'q' => 'Bagaimana proses pembayaran dan apakah ada DP?',
                    'a' => 'Pembayaran bisa transfer bank (BCA, Mandiri, BRI) atau QRIS. Sistem pembayaran: DP 50% di awal untuk mulai pengerjaan, pelunasan 50% setelah website selesai dan Anda approve sebelum domain dipublish. Untuk proyek besar, bisa diskusikan skema cicilan.',
                ],
                [
                    'q' => 'Apakah website akan muncul di Google?',
                    'a' => 'Ya! Semua website kami sudah dilengkapi SEO on-page: meta title, meta description, schema markup, sitemap XML, robots.txt, dan optimasi kecepatan. Untuk hasil maksimal di pencarian Google, kami rekomendasikan menambahkan layanan SEO bulanan atau membuat konten blog secara rutin.',
                ],
                [
                    'q' => 'Bagaimana jika ada masalah teknis setelah website live?',
                    'a' => 'Kami memberikan support gratis selama 3 bulan (Starter & Growth) atau 6 bulan (Premium) setelah website live. Cukup WhatsApp tim kami dan kami akan bantu troubleshoot. Setelah periode support berakhir, tersedia paket maintenance mulai Rp 300rb/bulan.',
                ],
            ] as $idx => $faq)
            <div
                class="bg-white rounded-2xl border border-slate-100 overflow-hidden shadow-soft"
                x-data
            >
                <button
                    @click="$dispatch('toggle-faq', { idx: {{ $idx }} }); open = open === {{ $idx }} ? null : {{ $idx }}"
                    class="w-full flex items-center justify-between gap-4 px-6 py-5 text-left group"
                >
                    <span class="font-semibold text-slate-800 group-hover:text-brand-600 transition-colors pr-4">
                        {{ $faq['q'] }}
                    </span>
                    <div class="flex-shrink-0 w-8 h-8 rounded-xl bg-slate-100 group-hover:bg-brand-50 flex items-center justify-center transition-all"
                        :class="open === {{ $idx }} ? 'bg-brand-50 rotate-45' : ''"
                        style="transition: transform 0.3s ease, background 0.2s ease"
                    >
                        <svg class="w-4 h-4 text-slate-500 group-hover:text-brand-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                    </div>
                </button>
                <div
                    x-show="open === {{ $idx }}"
                    x-collapse
                    class="px-6 pb-5"
                >
                    <p class="text-slate-600 text-sm leading-relaxed border-t border-slate-50 pt-4">
                        {{ $faq['a'] }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-10 text-center animate-on-scroll">
            <div class="inline-flex flex-col sm:flex-row items-center gap-4 bg-brand-50 border border-brand-100 rounded-3xl p-6">
                <div class="w-14 h-14 bg-brand-600 rounded-2xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                </div>
                <div class="text-center sm:text-left">
                    <h4 class="font-bold text-slate-800 mb-1">Masih ada pertanyaan?</h4>
                    <p class="text-slate-600 text-sm mb-3">Tim kami siap menjawab semua pertanyaan Anda via WhatsApp</p>
                    <a
                        href="https://wa.me/6281234567890?text=Halo%2C%20saya%20punya%20pertanyaan%20tentang%20jasa%20website%20company%20profile"
                        target="_blank"
                        class="inline-flex items-center gap-2 bg-brand-600 hover:bg-brand-700 text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition-all"
                    >
                        Chat Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>