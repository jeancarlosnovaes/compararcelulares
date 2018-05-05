<table class="table table-responsive" id="advertisements-table">
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
            <td>{!! $advertisement->platform !!}</td>
            <td>{!! $advertisement->code !!}</td>
            <td>{!! $advertisement->type !!}</td>
            <td>
                {!! Form::open(['route' => ['advertisements.destroy', $advertisement->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('advertisements.show', [$advertisement->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('advertisements.edit', [$advertisement->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>