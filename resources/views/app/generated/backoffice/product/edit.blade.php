<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.product.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('app.backoffice.product.edit', ['product' => $product])

</x-layouts.app>