<x-layouts.app>

    <x-slot:title>        <h1>
            {{ trans('global.create') }}            {{ trans('cruds.product.title_singular') }}        </h1>
    </x-slot:title>
    @livewire('app.backoffice.product.create')

</x-layouts.app>