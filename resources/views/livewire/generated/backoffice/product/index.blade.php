<div>
    <div wire:loading.delay>
        Loading...
    </div>
    @includeIf('app.backoffice.product.index.before_content')
    <div class="-my-2 -mx-6 overflow-x-auto lg:-mx-7">
        <div class="inline-block min-w-full py-2 align-middle px-6 lg:px-8">
            <div class="overflow-hidden shadow rounded">
                <table class="laragen-table">
                    <thead>
                    <tr>
                                                    @includeIf('app.backoffice.product.index.id_before_header')
                            <th>
                                {{ trans('cruds.product.fields.id') }}                            </th>
                            @includeIf('app.backoffice.product.index.id_after_header')
                                                    @includeIf('app.backoffice.product.index.created_at_before_header')
                            <th>
                                {{ trans('cruds.product.fields.created_at') }}                            </th>
                            @includeIf('app.backoffice.product.index.created_at_after_header')
                                                    @includeIf('app.backoffice.product.index.updated_at_before_header')
                            <th>
                                {{ trans('cruds.product.fields.updated_at') }}                            </th>
                            @includeIf('app.backoffice.product.index.updated_at_after_header')
                                                    @includeIf('app.backoffice.product.index.name_before_header')
                            <th>
                                {{ trans('cruds.product.fields.name') }}                            </th>
                            @includeIf('app.backoffice.product.index.name_after_header')
                                                <th style="width: 120px">{{ trans('global.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($items as $item)
                        <tr>
                                                            @includeIf('app.backoffice.product.fields.index.id_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.backoffice.product.fields.index.id',
                                            'app.generated.backoffice.product.fields.index.id'
                                        ]
                                    )
                                    @includeIf('app.backoffice.product.fields.index.id_after')
                                </td>
                                @includeIf('app.backoffice.product.fields.index.id_after_column')
                                                            @includeIf('app.backoffice.product.fields.index.created_at_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.backoffice.product.fields.index.created_at',
                                            'app.generated.backoffice.product.fields.index.created_at'
                                        ]
                                    )
                                    @includeIf('app.backoffice.product.fields.index.created_at_after')
                                </td>
                                @includeIf('app.backoffice.product.fields.index.created_at_after_column')
                                                            @includeIf('app.backoffice.product.fields.index.updated_at_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.backoffice.product.fields.index.updated_at',
                                            'app.generated.backoffice.product.fields.index.updated_at'
                                        ]
                                    )
                                    @includeIf('app.backoffice.product.fields.index.updated_at_after')
                                </td>
                                @includeIf('app.backoffice.product.fields.index.updated_at_after_column')
                                                            @includeIf('app.backoffice.product.fields.index.name_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.backoffice.product.fields.index.name',
                                            'app.generated.backoffice.product.fields.index.name'
                                        ]
                                    )
                                    @includeIf('app.backoffice.product.fields.index.name_after')
                                </td>
                                @includeIf('app.backoffice.product.fields.index.name_after_column')
                                                        <td>
                                <div class="form-group">
                                    
                                    @if(!$hideDefaultActions)

                                    
                                        
                                        <x-laragen::button variant="text" size="xs" icon="fa-light fa-eye" href="{{ route('laragen.admin.products.show', ['product' => $item->id]) }}"></x-laragen::button>
                                    
                                    
                                        
                                        <x-laragen::button variant="text" size="xs" icon="fa-light fa-pencil" href="{{ route('laragen.admin.products.edit', ['product' => $item->id]) }}"></x-laragen::button>                                    
                                                                                <x-laragen::button variant="text" size="xs" icon="fa-light fa-trash" color="error" wire:click="confirm('delete', {{ $item->id }})"></x-laragen::button>                                    
                                    @endif
                                    @includeIf('app.backoffice.product.index.actions')
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

    @includeIf('app.backoffice.product.index.after_content')
</div>

    @push('scripts')
        <script>
            Livewire.on('deleteNotAllowed', e => {
                alert('Delete not allowed, check related rows (' + e + ').');
            });
            Livewire.on('confirm', e => {
                if (!confirm("Are you sure?")) {
                    return
                }
            @this[e.callback](...e.argv)
            });
        </script>
    @endpush

@includeIf('app.backoffice.product.index.footer')
