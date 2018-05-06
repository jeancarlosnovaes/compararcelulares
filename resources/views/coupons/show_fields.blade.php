<div class="table-responsive">
    <table class="table table-bordered table-hover" id="coupon-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>URL</th>
                <th>Code</th>
                <th>Discount</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Category</th>
                <th>Pros</th>
                <th>Vote Yes</th>
                <th>Vote No</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $coupon->title }}</td>
                <td>{{ $coupon->description }}</td>
                <td><img src="{{ $coupon->image }}" alt="{{$coupon->title}}"></td>
                <td>{{ $coupon->url }}</td>
                <td>{{ $coupon->code }}</td>
                <td>{{ $coupon->discount }}</td>
                <td>{{ $coupon->start_date }}</td>
                <td>{{ $coupon->end_date }}</td>
                <td>{{ $coupon->category }}</td>
                <td>{{ $coupon->pros }}</td>
                <td>{{ $coupon->vote_yes }}</td>
                <td>{{ $coupon->vote_no }}</td>
            </tr>
        </tbody>
    </table>
</div>