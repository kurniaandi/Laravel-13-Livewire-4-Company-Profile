{{-- resources/views/components/landing/hero.blade.php --}}

<section class="relative hero-gradient min-h-screen flex items-center overflow-hidden pt-16">

    {{-- Background Decorations --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-brand-400/10 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 -left-32 w-80 h-80 bg-accent-400/8 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/3 w-64 h-64 bg-brand-300/10 rounded-full blur-2xl"></div>

        <svg class="absolute inset-0 w-full h-full opacity-[0.02]" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                    <path d="M 40 0 L 0 0 0 40" fill="none" stroke="currentColor" stroke-width="1" />
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid)" />
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            {{-- LEFT --}}
            <div class="text-center lg:text-left">

                {{-- Badge --}}
                @if($hero?->badge_text)
                <div class="inline-flex items-center gap-2 bg-brand-50 border border-brand-100 text-brand-700 text-xs font-semibold px-4 py-2 rounded-full mb-6 animate-fade-in">
                    {!! $hero->badge_text !!}
                </div>
                @endif

                {{-- Title --}}
                <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-700 text-slate-900 leading-tight mb-6">
                    {{ $hero?->title_top }}
                    <span class="gradient-text italic">{{ $hero?->title_highlight }}</span><br>
                    {{ $hero?->title_bottom }}<br>
                    <span class="text-slate-700">{{ $hero?->title_small }}</span>
                </h1>

                {{-- Description --}}
                <p class="text-lg text-slate-600 leading-relaxed mb-8 max-w-xl mx-auto lg:mx-0">
                    {!! $hero?->description !!}
                </p>

                {{-- CTA --}}
                <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start mb-10">

                    @if($hero?->cta_primary_text)
                    <a href="{{ $hero->cta_primary_url }}" target="_blank"
                        class="inline-flex items-center justify-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-semibold px-7 py-4 rounded-2xl shadow-brand shadow-md hover:shadow-brand/60 hover:shadow-lg transition-all duration-200 hover:-translate-y-0.5 group">
                        {{ $hero->cta_primary_text }}
                    </a>
                    @endif

                    @if($hero?->cta_secondary_text)
                    <a href="{{ $hero->cta_secondary_url }}"
                        class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-50 text-slate-700 font-semibold px-7 py-4 rounded-2xl border border-slate-200 shadow-soft hover:shadow-medium transition-all duration-200 hover:-translate-y-0.5">
                        {{ $hero->cta_secondary_text }}
                    </a>
                    @endif

                </div>

                {{-- Trust Items --}}
                @php
                $trustItems = is_array($hero?->trust_items)
                ? $hero->trust_items
                : json_decode($hero?->trust_items, true);
                @endphp

                @if($trustItems)
                <div class="flex flex-wrap items-center gap-4 justify-center lg:justify-start text-sm text-slate-500">
                    @foreach($trustItems as $item)
                    <div class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                        </svg>
                        {{ $item }}
                    </div>
                    @endforeach
                </div>
                @endif

            </div>

            {{-- RIGHT --}}
            <div class="relative flex justify-center lg:justify-end">

                <div class="relative w-80 sm:w-96 lg:w-[440px]">
                    {{-- Screen --}}
                    <div class="bg-slate-900 rounded-t-2xl p-2 shadow-strong">
                        <div class="flex items-center gap-1.5 mb-2 px-1">
                            <div class="w-2.5 h-2.5 rounded-full bg-red-400"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-yellow-400"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-emerald-400"></div>
                            <div class="flex-1 bg-slate-700 rounded-md h-5 ml-2 flex items-center px-2">
                                <span class="text-slate-400 text-xs">lagikoding.com</span>
                            </div>
                        </div>
                        {{-- Website Preview --}}
                        <div class="bg-white rounded-xl overflow-hidden" style="height: 220px;">
                            <div class="h-8 bg-gradient-to-r from-brand-600 to-brand-500 flex items-center px-4 gap-3">
                                <div class="w-16 h-3 bg-white/30 rounded"></div>
                                <div class="flex gap-2 ml-auto">
                                    <div class="w-10 h-3 bg-white/20 rounded"></div>
                                    <div class="w-10 h-3 bg-white/20 rounded"></div>
                                    <div class="w-10 h-3 bg-white/20 rounded"></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="flex gap-4">
                                    <div class="flex-1">
                                        <div class="h-3 bg-slate-200 rounded mb-2 w-3/4"></div>
                                        <div class="h-5 bg-brand-100 rounded mb-2"></div>
                                        <div class="h-3 bg-slate-100 rounded mb-1 w-full"></div>
                                        <div class="h-3 bg-slate-100 rounded mb-3 w-5/6"></div>
                                        <div class="h-8 bg-brand-600 rounded-lg w-28"></div>
                                    </div>
                                    <div class="w-24 h-28 bg-gradient-to-br from-brand-100 to-brand-200 rounded-xl flex items-center justify-center">
                                        <svg class="w-10 h-10 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="mt-3 grid grid-cols-3 gap-2">
                                    <div class="h-12 bg-slate-50 border border-slate-100 rounded-lg"></div>
                                    <div class="h-12 bg-slate-50 border border-slate-100 rounded-lg"></div>
                                    <div class="h-12 bg-slate-50 border border-slate-100 rounded-lg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Keyboard --}}
                    <div class="bg-slate-800 rounded-b-lg h-3 mx-4 shadow-lg"></div>
                    <div class="bg-slate-700 rounded-b-xl h-2 mx-1 shadow"></div>
                </div>

                {{-- Mobile Mockup (floating) --}}
                <div class="absolute -bottom-6 -right-4 sm:-right-8 mockup-float-delay">
                    <div class="bg-slate-900 rounded-[1.5rem] p-1.5 shadow-strong w-24">
                        <div class="bg-white rounded-[1.2rem] overflow-hidden h-44">
                            <div class="h-4 bg-gradient-to-r from-brand-600 to-brand-500"></div>
                            <div class="p-2">
                                <div class="h-2 bg-slate-200 rounded mb-1.5 w-full"></div>
                                <div class="h-3 bg-brand-100 rounded mb-1.5"></div>
                                <div class="h-1.5 bg-slate-100 rounded mb-1 w-full"></div>
                                <div class="h-1.5 bg-slate-100 rounded mb-2 w-4/5"></div>
                                <div class="h-5 bg-brand-600 rounded-lg mb-2"></div>
                                <div class="h-8 bg-slate-50 border border-slate-100 rounded-lg"></div>
                                <div class="h-8 bg-slate-50 border border-slate-100 rounded-lg mt-1.5"></div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Floating Badge: Speed --}}
                @if($hero?->speed_score)
                <div class="absolute -top-4 -right-4 bg-white rounded-2xl shadow-medium p-3 flex items-center gap-2">
                    <div>
                        <div class="text-xs font-bold text-slate-800">{{ $hero->speed_score }}</div>
                        <div class="text-[10px] text-slate-500">PageSpeed Score</div>
                    </div>
                </div>
                @endif

                {{-- Floating Badge: Leads --}}
                @if($hero?->leads_increase)
                <div class="absolute top-1/2 -right-6 sm:-right-12 bg-white rounded-2xl shadow-medium p-3 flex items-center gap-2">
                    <div>
                        <div class="text-xs font-bold text-slate-800">{{ $hero->leads_increase }}</div>
                        <div class="text-[10px] text-slate-500">Leads meningkat</div>
                    </div>
                </div>
                @endif

            </div>

        </div>
    </div>

</section>