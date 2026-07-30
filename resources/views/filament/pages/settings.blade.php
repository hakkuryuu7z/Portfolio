<x-filament-panels::page>
    <form wire:submit="save">
        {{ $this->form }}

        <div style="margin-top: 1rem;">
            <x-filament::button type="submit">
                Save Changes
            </x-filament::button>
        </div>
    </form>
</x-filament-panels::page>
