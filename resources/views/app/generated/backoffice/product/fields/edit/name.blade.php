<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.product.fields.name') }}" for="572" :errors="$errors->get('product.name')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.product.fields.name')}}" name="product.name" id="572" wire:model.defer="product.name" />
</x-laragen::input.group>