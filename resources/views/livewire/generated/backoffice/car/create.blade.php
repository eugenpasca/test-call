<x-laragen::form wire:submit.prevent="submit" class="pb-7 bg-white shadow rounded px-7">
                    @includeIf('app.backoffice.car.create.fieldset.74.before')
        <fieldset>

                            <legend>
                    <h2>Default fieldset</h2>
                                            <p class="mt-3 text-base text-gray-400">Default fieldset desc</p>
                                        @includeIf('app.backoffice.car.create.fieldset.74.legend_description')
                </legend>
            
            <div class="flex-1 -mx-2">
                @includeIf('app.backoffice.car.create.fieldset.74.content_before')
                                    @includeIf('app.backoffice.car.fields.create.name_before')
                    @includeFirst([
                                'app.backoffice.car.fields.create.name',
                                'app.generated.backoffice.car.fields.create.name'
                            ])
                    @includeIf('app.backoffice.car.fields.create.name_after')
                                @includeIf('app.backoffice.car.create.fieldset.74.content_after')
            </div>

        </fieldset>
        @includeIf('app.backoffice.car.create.fieldset.74.after')
    
    <div class="form-group">

        <x-laragen::button class="mr-2">        {{ trans('global.save') }}        </x-laragen::button>
                <a href="{{ route('laragen.admin.cars.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>

</x-laragen::form>
@includeIf('app.backoffice.car.create.footer')
