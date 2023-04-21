<div>
    <div wire:loading.delay>
        Loading...
    </div>
    @includeIf('app.backoffice.car.index.before_content')
    <div class="-my-2 -mx-6 overflow-x-auto lg:-mx-7">
        <div class="inline-block min-w-full py-2 align-middle px-6 lg:px-8">
            <div class="overflow-hidden shadow rounded">
                <table class="laragen-table">
                    <thead>
                    <tr>
                                                    @includeIf('app.backoffice.car.index.name_before_header')
                            <th>
                                {{ trans('cruds.car.fields.name') }}                            </th>
                            @includeIf('app.backoffice.car.index.name_after_header')
                                                <th style="width: 120px">{{ trans('global.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($items as $item)
                        <tr>
                                                            @includeIf('app.backoffice.car.fields.index.name_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.backoffice.car.fields.index.name',
                                            'app.generated.backoffice.car.fields.index.name'
                                        ]
                                    )
                                    @includeIf('app.backoffice.car.fields.index.name_after')
                                </td>
                                @includeIf('app.backoffice.car.fields.index.name_after_column')
                                                        <td>
                                <div class="form-group">
                                    
                                    @if(!$hideDefaultActions)

                                    
                                        
                                        <x-laragen::button variant="text" size="xs" icon="fa-light fa-eye" href="{{ route('laragen.admin.cars.show', ['car' => $item->id]) }}"></x-laragen::button>
                                    
                                    
                                        
                                        <x-laragen::button variant="text" size="xs" icon="fa-light fa-pencil" href="{{ route('laragen.admin.cars.edit', ['car' => $item->id]) }}"></x-laragen::button>                                    
                                                                            <x-laragen::button variant="text" size="xs" icon="fa-light fa-trash" color="error" wire:click="delete({{ $item->id }})"></x-laragen::button>                                    
                                    @endif
                                    @includeIf('app.backoffice.car.index.actions')
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-5 pagination">
                {{ $items->onEachSide(1)->links() }}
            </div>
        </div>
    </div>

    @includeIf('app.backoffice.car.index.after_content')
</div>

    @push('scripts')
        <script>
            Livewire.on('deleteNotAllowed', e => {
                alert('Delete not allowed, check related rows.');
            })
        </script>
    @endpush

@includeIf('app.backoffice.car.index.footer')
