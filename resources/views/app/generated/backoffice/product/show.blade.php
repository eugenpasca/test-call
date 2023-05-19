<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.product.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('app.backoffice.product.show', ['product' => $product])

</x-layouts.app>