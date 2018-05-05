<table class="table table-responsive" id="coupons-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Description</th>
        <th>Image</th>
        <th>Url</th>
        <th>Code</th>
        <th>Discount</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Category</th>
        <th>Vote Yes</th>
        <th>Vote No</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($coupons as $coupon)
        <tr>
            <td>{!! $coupon->title !!}</td>
            <td>{!! $coupon->description !!}</td>
            <td>{!! $coupon->image !!}</td>
            <td>{!! $coupon->url !!}</td>
            <td>{!! $coupon->code !!}</td>
            <td>{!! $coupon->discount !!}</td>
            <td>{!! $coupon->start_date !!}</td>
            <td>{!! $coupon->end_date !!}</td>
            <td>{!! $coupon->category !!}</td>
            <td>{!! $coupon->vote_yes !!}</td>
            <td>{!! $coupon->vote_no !!}</td>
            <td>
                {!! Form::open(['route' => ['coupons.destroy', $coupon->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('coupons.show', [$coupon->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('coupons.edit', [$coupon->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>