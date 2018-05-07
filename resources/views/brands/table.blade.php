<div class="table-responsive">
    <table class="table table-bordered table-hover" id="brands-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Logo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($brands as $brand)
            <tr>
                <td>{{ $brand->name }}</td>
                <td><img src="storage/img/{{ $brand->logo }}" alt="{{ $brand->name }}"></td>
                <td>
                    {{ Form::open(['route' => ['brands.destroy', $brand->id], 'method' => 'delete']) }}
                    <div class='btn-group d-flex justify-content-center'>
                        <a href="{{ route('brands.show', [$brand->id]) }}" class='btn btn-outline-secondary btn-sm'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('brands.edit', [$brand->id]) }}" class='btn btn-outline-secondary btn-sm'>
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