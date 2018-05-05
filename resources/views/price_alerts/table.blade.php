<table class="table table-responsive" id="priceAlerts-table">
    <thead>
        <tr>
            <th>Product Id</th>
        <th>Product Name</th>
        <th>Email</th>
        <th>Activatation Digest</th>
        <th>Activated</th>
        <th>Activated At</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($priceAlerts as $priceAlert)
        <tr>
            <td>{!! $priceAlert->product_id !!}</td>
            <td>{!! $priceAlert->product_name !!}</td>
            <td>{!! $priceAlert->email !!}</td>
            <td>{!! $priceAlert->activatation_digest !!}</td>
            <td>{!! $priceAlert->activated !!}</td>
            <td>{!! $priceAlert->activated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['priceAlerts.destroy', $priceAlert->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('priceAlerts.show', [$priceAlert->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('priceAlerts.edit', [$priceAlert->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>