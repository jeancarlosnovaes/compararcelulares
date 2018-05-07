<div class="table-responsive">
    <table class="table table-bordered table-hover" id="store-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Logo</th>
                <th>URL</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stores as $store)
            <tr>
                <td>{{ $store->name }}</td>
                <td><img src="{{ $store->logo }}" alt="{{ $store->name }}"></td>
                <td><a href="{{ $store->url }}">{{ $store->url }}</a></td>
                <td>
                    {{ Form::open(['route' => ['stores.destroy', $store->id], 'method' => 'delete']) }}
                    <div class='btn-group d-flex justify-content-center'>
                        <a href="{{ route('stores.show', [$store->id]) }}" class='btn btn-outline-secondary btn-sm'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('stores.edit', [$store->id]) }}" class='btn btn-outline-secondary btn-sm'>
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