<flux:modal name="create-hero" class="min-w-[50rem]">
    <form wire:submit.prevent="store" class="space-y-4">

        {{-- HEADER --}}
        <div class="flex items-center justify-between border-b border-blue-100 dark:border-blue-900/30 pb-3">
            <div>
                <flux:heading size="lg" class="text-blue-700 dark:text-blue-300">
                    Tambah Hero
                </flux:heading>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Buat tampilan hero baru untuk landing page
                </p>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4">

            <flux:input label="Badge" wire:model="badge_text" />
            <flux:input label="Title Top" wire:model="title_top" />

            <flux:input label="Title Highlight" wire:model="title_highlight" />
            <flux:input label="Title Bottom" wire:model="title_bottom" />

            <flux:input label="Title Small" wire:model="title_small" />

            {{-- full width --}}
            <div class="col-span-2">
                <flux:textarea label="Deskripsi" wire:model="description" />
            </div>

            <flux:input label="CTA Primary Text" wire:model="cta_primary_text" />
            <flux:input label="CTA Primary URL" wire:model="cta_primary_url" />

            <flux:input label="CTA Secondary Text" wire:model="cta_secondary_text" />
            <flux:input label="CTA Secondary URL" wire:model="cta_secondary_url" />

            {{-- full width --}}
            <div class="col-span-2">
                <flux:input
                    label="Trust Items (pisahkan dengan koma)"
                    wire:model="trust_items"
                />
            </div>

            <flux:input label="Speed Score (%)" type="number" wire:model="speed_score" />
            <flux:input label="Leads Increase (%)" type="number" wire:model="leads_increase" />

            {{-- full width --}}
            <div class="col-span-2 flex items-center gap-2">
                <input type="checkbox" wire:model="is_active">
                <span class="text-sm">Set sebagai aktif</span>
            </div>

        </div>

        <div class="flex justify-end gap-2 pt-4">
            <flux:modal.close>
                <flux:button variant="primary" wire:click="resetForm">Batal</flux:button>
            </flux:modal.close>
            <flux:button variant="danger" type="submit">Simpan</flux:button>
        </div>

    </form>
</flux:modal>