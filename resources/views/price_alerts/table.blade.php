<div class="table-responsive">
    <table class="table table-bordered table-hover" id="priceAlert-table">
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
                <td>{{ $priceAlert->product_id }}</td>
                <td>{{ $priceAlert->product_name }}</td>
                <td>{{ $priceAlert->email }}</td>
                <td>{{ $priceAlert->activatation_digest }}</td>
                <td>{{ $priceAlert->activated }}</td>
                <td>{{ $priceAlert->activated_at }}</td>
                <td>
                    {{ Form::open(['route' => ['priceAlerts.destroy', $priceAlert->id], 'method' => 'delete']) }}
                    <div class='btn-group d-flex justify-content-center'>
                        <a href="{{ route('priceAlerts.show', [$priceAlert->id]) }}" class='btn btn-outline-secondary btn-sm'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('priceAlerts.edit', [$priceAlert->id]) }}" class='btn btn-outline-secondary btn-sm'>
                            <i class="fas fa-edit"></i>
                        </a>
                        {{ Form::button('
                        <i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-sm', 'onclick' => "return confirm('Are
                        you sure?')"]) }}
                    </div>
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>