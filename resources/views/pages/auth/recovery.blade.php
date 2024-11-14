<x-filament-panels::page.simple>
    <x-slot name="subheading">
        {{ __('filament-jetstream::default.two_factor_authentication.or.label') }}
        {{ $this->challengeAction }}
    </x-slot>

    <x-filament-panels::form id="form" wire:submit="authenticate">
        {{ $this->form }}
    </x-filament-panels::form>

</x-filament-panels::page.simple>