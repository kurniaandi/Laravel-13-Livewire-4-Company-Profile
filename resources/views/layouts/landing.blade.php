<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>{{ $seo['title'] ?? 'Website Company Profile UMKM Profesional | WebPro Agency' }}</title>
    <meta name="description" content="{{ $seo['description'] ?? 'Jasa pembuatan website company profile profesional untuk UMKM. Tampil terpercaya, dapat leads lebih banyak. Harga mulai 1,5 juta. Konsultasi gratis!' }}">
    <meta name="keywords" content="jasa website umkm, website company profile, website bisnis murah, web profesional umkm">
    <meta name="author" content="WebPro Agency">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url('/') }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $seo['title'] ?? 'Website Company Profile UMKM Profesional' }}">
    <meta property="og:description" content="{{ $seo['description'] ?? 'Jasa pembuatan website company profile profesional untuk UMKM.' }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:locale" content="id_ID">


    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seo['title'] ?? 'Website Company Profile UMKM Profesional' }}">
    <meta name="twitter:description" content="{{ $seo['description'] ?? 'Jasa website company profile untuk UMKM.' }}">


    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,600;0,9..144,700;1,9..144,400&display=swap" rel="stylesheet">

  
    @livewireStyles

    
    @vite(['resources/css/landing.css', 'resources/js/landing.js'])
</head>
<body class="font-sans text-slate-800 antialiased">

    @include('components.landing.navbar')

    @include('components.landing.sticky-cta')

    <main>
        {{ $slot }}
    </main>

    @include('components.landing.footer')

    @livewireScripts

</body>
</html>