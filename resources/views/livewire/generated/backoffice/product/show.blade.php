<div class="table-fieldset">

        
        <table class="w-full show-table">
                                            <tr>
                    <th class="text-left">
                        {{ trans('cruds.product.fields.id') }}                    </th>
                    <td>

                        @includeFirst(
                            [
                            'app.backoffice.product.fields.show.id',
                            'app.generated.backoffice.product.fields.show.id'
                            ]
                        )
                    </td>
                </tr>
                @includeIf('app.backoffice.product.fields.show.id_after')
                                            <tr>
                    <th class="text-left">
                        {{ trans('cruds.product.fields.created_at') }}                    </th>
                    <td>

                        @includeFirst(
                            [
                            'app.backoffice.product.fields.show.created_at',
                            'app.generated.backoffice.product.fields.show.created_at'
                            ]
                        )
                    </td>
                </tr>
                @includeIf('app.backoffice.product.fields.show.created_at_after')
                                            <tr>
                    <th class="text-left">
                        {{ trans('cruds.product.fields.updated_at') }}                    </th>
                    <td>

                        @includeFirst(
                            [
                            'app.backoffice.product.fields.show.updated_at',
                            'app.generated.backoffice.product.fields.show.updated_at'
                            ]
                        )
                    </td>
                </tr>
                @includeIf('app.backoffice.product.fields.show.updated_at_after')
                                            <tr>
                    <th class="text-left">
                        {{ trans('cruds.product.fields.name') }}                    </th>
                    <td>

                        @includeFirst(
                            [
                            'app.backoffice.product.fields.show.name',
                            'app.generated.backoffice.product.fields.show.name'
                            ]
                        )
                    </td>
                </tr>
                @includeIf('app.backoffice.product.fields.show.name_after')
                    </table>
    </div>

@includeIf('app.backoffice.product.show.footer')
