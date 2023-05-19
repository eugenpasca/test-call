<x-layouts.app>
    <x-slot:title>        <h1>
            {{ trans('cruds.product.title_multiple') }}        </h1>
    </x-slot:title>

    <x-slot:headerActions>                            <x-laragen::button href="{{ route('laragen.admin.products.create') }}">                {{ trans('global.create') }}
            </x-laragen::button>            </x-slot:headerActions>
    @livewire('app.backoffice.product.index')

</x-layouts.app>