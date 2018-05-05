<table class="table table-responsive" id="stores-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Logo</th>
        <th>Url</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($stores as $store)
        <tr>
            <td>{!! $store->name !!}</td>
            <td>{!! $store->logo !!}</td>
            <td>{!! $store->url !!}</td>
            <td>
                {!! Form::open(['route' => ['stores.destroy', $store->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('stores.show', [$store->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('stores.edit', [$store->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>