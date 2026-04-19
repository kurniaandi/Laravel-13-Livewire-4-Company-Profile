<?php

use App\Models\Hero;
use Livewire\Component;
use Livewire\WithPagination;
use Flux\Flux;

new class extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public ?int $deleteId = null;
    public ?int $heroId = null;
    public string $search = '';

    public $badge_text,
        $title_top,
        $title_highlight,
        $title_bottom,
        $title_small,
        $description,
        $cta_primary_text,
        $cta_primary_url,
        $cta_secondary_text,
        $cta_secondary_url,
        $trust_items = [],
        $speed_score,
        $leads_increase,
        $is_active = false;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function confirmDelete()
    {
        Hero::findOrFail($this->deleteId)->delete();
        Flux::modal('delete-hero')->close();
        session()->flash('success', 'Surat pengantar berhasil dihapus.');
    }

    public function delete($id)
    {
        $this->deleteId = $id;
        Flux::modal('delete-hero')->show();
    }

    public function toggleActive($id)
    {
        $hero = Hero::findOrFail($id);

        if ($hero->is_active) {
            $hero->update(['is_active' => false]);
        } else {
            Hero::query()->update(['is_active' => false]);
            $hero->update(['is_active' => true]);
        }

        session()->flash('success', 'Status hero diperbarui.');
    }

    public function resetForm()
    {
        $this->reset([
            'heroId',
            'badge_text',
            'title_top',
            'title_highlight',
            'title_bottom',
            'title_small',
            'description',
            'cta_primary_text',
            'cta_primary_url',
            'cta_secondary_text',
            'cta_secondary_url',
            'trust_items',
            'speed_score',
            'leads_increase',
            'is_active',
        ]);
    }

    public function store()
    {
        if ($this->is_active) {
            Hero::query()->update(['is_active' => false]);
        }

        Hero::create([
            'badge_text'          => $this->badge_text,
            'title_top'           => $this->title_top,
            'title_highlight'     => $this->title_highlight,
            'title_bottom'        => $this->title_bottom,
            'title_small'         => $this->title_small,
            'description'         => $this->description,
            'cta_primary_text'    => $this->cta_primary_text,
            'cta_primary_url'     => $this->cta_primary_url,
            'cta_secondary_text'  => $this->cta_secondary_text,
            'cta_secondary_url'   => $this->cta_secondary_url,
            'trust_items'         => $this->trust_items,
            'speed_score'         => $this->speed_score,
            'leads_increase'      => $this->leads_increase,
            'is_active'           => $this->is_active,
        ]);

        $this->resetForm();
        Flux::modal('create-hero')->close();
        session()->flash('success', 'Hero berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $hero = Hero::findOrFail($id);

        $this->heroId           = $id;
        $this->badge_text       = $hero->badge_text;
        $this->title_top        = $hero->title_top;
        $this->title_highlight  = $hero->title_highlight;
        $this->title_bottom     = $hero->title_bottom;
        $this->title_small      = $hero->title_small;
        $this->description      = $hero->description;
        $this->cta_primary_text = $hero->cta_primary_text;
        $this->cta_primary_url  = $hero->cta_primary_url;
        $this->cta_secondary_text = $hero->cta_secondary_text;
        $this->cta_secondary_url  = $hero->cta_secondary_url;
        $this->trust_items      = $hero->trust_items ?? [];
        $this->speed_score      = $hero->speed_score;
        $this->leads_increase   = $hero->leads_increase;
        $this->is_active        = $hero->is_active;

        Flux::modal('edit-hero')->show();
    }

    public function update()
    {
        if ($this->is_active) {
            Hero::query()->update(['is_active' => false]);
        }

        Hero::findOrFail($this->heroId)->update([
            'badge_text'          => $this->badge_text,
            'title_top'           => $this->title_top,
            'title_highlight'     => $this->title_highlight,
            'title_bottom'        => $this->title_bottom,
            'title_small'         => $this->title_small,
            'description'         => $this->description,
            'cta_primary_text'    => $this->cta_primary_text,
            'cta_primary_url'     => $this->cta_primary_url,
            'cta_secondary_text'  => $this->cta_secondary_text,
            'cta_secondary_url'   => $this->cta_secondary_url,
            'trust_items'         => $this->trust_items,
            'speed_score'         => $this->speed_score,
            'leads_increase'      => $this->leads_increase,
            'is_active'           => $this->is_active,
        ]);

        $this->resetForm();
        Flux::modal('edit-hero')->close();
        session()->flash('success', 'Hero berhasil diupdate.');
    }

    public function render()
    {
        return $this->view([
            'heroes' => Hero::latest()
                ->when(
                    $this->search,
                    fn($q) => $q
                        ->where('title_top', 'like', '%' . $this->search . '%')
                        ->orWhere('badge_text', 'like', '%' . $this->search . '%')
                        ->orWhere('description', 'like', '%' . $this->search . '%')
                )
                ->paginate(10),
        ])
            ->layout('layouts::app')
            ->title('Hero Section');
    }
};
?>

<div class="relative mb-6 w-full">

    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">
    <div class="space-y-1">
        <div class="flex items-center gap-2">
            <flux:heading size="xl" level="1" class="text-blue-700 dark:text-blue-300">
                Hero Section
            </flux:heading>
        </div>

        <flux:subheading size="lg" class="text-gray-500 dark:text-gray-400">
            Kelola tampilan utama website: judul, CTA, dll.
        </flux:subheading>
    </div>
    <flux:breadcrumbs>
        <flux:breadcrumbs.item 
            href="{{ route('dashboard.index') }}" 
            separator="slash"
            class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200"
        >
            Home
        </flux:breadcrumbs.item>

        <flux:breadcrumbs.item 
            separator="slash"
            class="text-blue-600 dark:text-blue-400 font-medium"
        >
            Landing
        </flux:breadcrumbs.item>

        <flux:breadcrumbs.item 
            separator="slash"
            class="text-blue-700 dark:text-blue-300 font-semibold underline underline-offset-4"
        >
            Hero
        </flux:breadcrumbs.item>
    </flux:breadcrumbs>

</div>

    <flux:separator variant="subtle" />
    <div class="mt-4 flex flex-col sm:flex-row gap-3 items-start sm:items-center justify-between">

        <flux:input
            wire:model.live.debounce.300ms="search"
            placeholder="Cari hero..."
            icon="magnifying-glass"
            class="w-full sm:w-72" />

        <flux:modal.trigger name="create-hero" wire:click="resetForm">
            <flux:button variant="primary" color="blue" wire:loading.attr="disabled" icon="plus">
                Tambah Hero
            </flux:button>
        </flux:modal.trigger>

    </div>
    @include('components.back.heroes.modal-create')
    @include('components.back.heroes.modal-edit')
    @if (session()->has('success'))
    <div
        x-data="{ show: true }"
        x-show="show"
        x-init="setTimeout(() => show = false, 3000)"
        class="fixed top-5 right-5 bg-green-600 text-white text-sm p-4 rounded-lg shadow-lg z-50">
        {{ session('success') }}
    </div>
    @endif
    <div class="mt-6 overflow-x-auto rounded-xl border border-gray-200 dark:border-neutral-700">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700 text-sm">
            <thead class="bg-gray-50 dark:bg-neutral-800">
                <tr>
                    <thead class="bg-blue-50 dark:bg-blue-900/20">
                        <tr>
                            <th class="px-4 py-3 text-left font-semibold text-blue-700 dark:text-blue-300 w-8">
                                #
                            </th>
                            <th class="px-4 py-3 text-left font-semibold text-blue-700 dark:text-blue-300">
                                Judul
                            </th>
                            <th class="px-4 py-3 text-left font-semibold text-blue-700 dark:text-blue-300">
                                Deskripsi
                            </th>
                            <th class="px-4 py-3 text-left font-semibold text-blue-700 dark:text-blue-300">
                                CTA
                            </th>
                            <th class="px-4 py-3 text-center font-semibold text-blue-700 dark:text-blue-300">
                                Status
                            </th>
                            <th class="px-4 py-3 text-center font-semibold text-blue-700 dark:text-blue-300">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 dark:divide-neutral-800 bg-white dark:bg-neutral-900">
                @forelse ($heroes as $hero)
                <tr class="hover:bg-gray-50 dark:hover:bg-neutral-800 transition">

                    <td class="px-4 py-3 text-gray-400 dark:text-gray-500">
                        {{ $loop->iteration + ($heroes->currentPage() - 1) * $heroes->perPage() }}
                    </td>

                    <td class="px-4 py-3 text-gray-800 dark:text-gray-100 font-medium max-w-xs">
                        {{ $hero->title_top }}
                        <span class="text-blue-600">{{ $hero->title_highlight }}</span>
                        {{ $hero->title_bottom }}
                    </td>

                    <td class="px-4 py-3 text-gray-500 dark:text-gray-400 max-w-sm truncate">
                        {{ $hero->description }}
                    </td>

                    <td class="px-4 py-3">
                        <div class="flex flex-col gap-1">
                            <span class="text-xs bg-gray-100 dark:bg-neutral-800 px-2 py-0.5 rounded text-gray-600 dark:text-gray-300 truncate max-w-[120px]">
                                {{ $hero->cta_primary_text }}
                            </span>
                            <span class="text-xs bg-gray-100 dark:bg-neutral-800 px-2 py-0.5 rounded text-gray-600 dark:text-gray-300 truncate max-w-[120px]">
                                {{ $hero->cta_secondary_text }}
                            </span>
                        </div>
                    </td>

                    <td class="px-4 py-3 text-center">
                        @if ($hero->is_active)
                        <span class="inline-flex items-center gap-1 text-xs font-semibold text-green-700 bg-green-100 dark:bg-green-950 dark:text-green-400 px-2 py-1 rounded-full">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500 inline-block"></span>
                            Active
                        </span>
                        @else
                        <span class="inline-flex items-center gap-1 text-xs font-semibold text-gray-500 bg-gray-100 dark:bg-neutral-800 px-2 py-1 rounded-full">
                            <span class="w-1.5 h-1.5 rounded-full bg-gray-400 inline-block"></span>
                            Inactive
                        </span>
                        @endif
                    </td>

                    <td class="px-4 py-3">
                        <div class="flex items-center justify-center gap-2">

                            <button wire:click="edit({{ $hero->id }})" title="Edit" class="text-blue-500 hover:text-orange-700 transition">
                                <flux:icon.pencil-square variant="mini" class="size-5" />
                            </button>

                            <span class="text-gray-300 dark:text-neutral-600">|</span>

                            <flux:switch
                                :checked="$hero->is_active"
                                wire:click="toggleActive({{ $hero->id }})" />

                            <span class="text-gray-300 dark:text-neutral-600">|</span>

                            <button wire:click="delete({{ $hero->id }})" title="Hapus" class="text-red-500 hover:text-red-700 transition">
                                <flux:icon.trash variant="mini" class="size-5" />
                            </button>

                        </div>
                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-4 py-12 text-center text-gray-400 dark:text-gray-500">
                        @if ($search)
                        Tidak ada hasil untuk <span class="font-medium">"{{ $search }}"</span>.
                        @else
                        Belum ada data hero.
                        @endif
                    </td>
                </tr>
                @endforelse

            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $heroes->links() }}
    </div>

    <flux:modal name="delete-hero">
        <div class="space-y-6">
            <flux:heading size="lg">Hapus Hero?</flux:heading>
            <flux:text>Data tidak bisa dikembalikan.</flux:text>
            <div class="flex gap-2">
                <flux:spacer />
                <flux:modal.close>
                    <flux:button variant="ghost">Batal</flux:button>
                </flux:modal.close>
                <flux:button variant="danger" wire:click="confirmDelete">Hapus</flux:button>
            </div>
        </div>
    </flux:modal>

</div>