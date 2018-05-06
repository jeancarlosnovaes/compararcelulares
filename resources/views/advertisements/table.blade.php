<div class="table-responsive">
    <table class="table table-bordered table-hover" id="brands-table">
        <thead>
            <tr>
                <th>Platform</th>
                <th>Code</th>
                <th>Type</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($advertisements as $advertisement)
            <tr>
                <td>{{ $advertisement->platform }}</td>
                <td>{{ $advertisement->code }}</td>
                <td>{{ $advertisement->type }}</td>
                <td>
                    {{ Form::open(['route' => ['advertisements.destroy', $advertisement->id], 'method' => 'delete']) }}
                    <div class='btn-group d-flex justify-content-center'>
                        <a href="{{ route('advertisements.show', [$advertisement->id]) }}" class='btn btn-outline-secondary btn-sm'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('advertisements.edit', [$advertisement->id]) }}" class='btn btn-outline-secondary btn-sm'>
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