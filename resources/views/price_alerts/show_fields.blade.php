<div class="table-responsive">
    <table class="table table-bordered table-hover" id="priceAlert-table">
        <thead>
            <tr>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Email</th>
                <th>Activated</th>
                <th>Activated At</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $priceAlert->product_id }}</td>
                <td>{{ $priceAlert->product_name }}</td>
                <td>{{ $priceAlert->email }}</td>
                <td>{{ $priceAlert->activated }}</td>
                <td>{{ $priceAlert->activated_at }}</td>

            </tr>
        </tbody>
    </table>
</div>