<x-laragen::form wire:submit.prevent="submit" class="pb-7 bg-white shadow rounded px-7">
                    @includeIf('app.backoffice.product.create.fieldset.default-fieldset-79.before')
        <fieldset>

            
            <div class="flex-1 -mx-2">
                @includeIf('app.backoffice.product.create.fieldset.default-fieldset-79.content_before')
                                    @includeIf('app.backoffice.product.fields.create.name_before')
                    @includeFirst([
                                'app.backoffice.product.fields.create.name',
                                'app.generated.backoffice.product.fields.create.name'
                            ])
                    @includeIf('app.backoffice.product.fields.create.name_after')
                                @includeIf('app.backoffice.product.create.fieldset.default-fieldset-79.content_after')
            </div>

        </fieldset>
        @includeIf('app.backoffice.product.create.fieldset.default-fieldset-79.after')
    
    <div class="form-group">

        <x-laragen::button class="mr-2">        {{ trans('global.save') }}        </x-laragen::button>
                <a href="{{ route('laragen.admin.products.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>

</x-laragen::form>
@includeIf('app.backoffice.product.create.footer')
