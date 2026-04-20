<?php

use Livewire\Component;
use App\Models\Hero;

new class extends Component
{
    public $hero;

    public function mount()
    {
        $this->hero = Hero::where('is_active', true)->latest()->first();
    }

    public function render()
    {
        return $this->view([
            'hero' => $this->hero,
        ])
        ->layout('layouts::landing')
        ->title('Landing Page');
    }
};
?>
<div>

    {{-- 1. Hero Section --}}
    @include('components.landing.hero')

    {{-- 2. Social Proof & Trust --}}
    @include('components.landing.social-proof')

    {{-- 3. Masalah UMKM --}}
    @include('components.landing.problems')

    {{-- 4. Solusi --}}
    @include('components.landing.solutions')

    {{-- 5. Portfolio Showcase --}}
    @include('components.landing.portfolio')

    {{-- 6. Paket Harga --}}
    @include('components.landing.pricing')

    {{-- 7. FAQ --}}
    @include('components.landing.faq')
</div>
