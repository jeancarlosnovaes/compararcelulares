<div class="table-responsive">
    <table class="table table-bordered table-hover" id="coupons-table">
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
                <td>{{ $coupon->title }}</td>
                <td>{{ $coupon->description }}</td>
                <td>{{ $coupon->image }}</td>
                <td>{{ $coupon->url }}</td>
                <td>{{ $coupon->code }}</td>
                <td>{{ $coupon->discount }}</td>
                <td>{{ $coupon->start_date }}</td>
                <td>{{ $coupon->end_date }}</td>
                <td>{{ $coupon->category }}</td>
                <td>{{ $coupon->vote_yes }}</td>
                <td>{{ $coupon->vote_no }}</td>
                <td>
                    {{ Form::open(['route' => ['coupons.destroy', $coupon->id], 'method' => 'delete']) }}
                    <div class='btn-group d-flex justify-content-center'>
                        <a href="{{ route('coupons.show', [$coupon->id]) }}" class='btn btn-outline-secondary btn-sm'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('coupons.edit', [$coupon->id]) }}" class='btn btn-outline-secondary btn-sm'>
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