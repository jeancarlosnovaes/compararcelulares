<div class="table-responsive">
    <table class="table table-bordered table-hover" id="store-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Logo</th>
                <th>URL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $store->product_id }}</td>
                <td>{{ $store->product_name }}</td>
                <td>{{ $store->name }}</td>
                <td><img src="{{ $store->logo }}" alt="{{ $store->name }}"></td>
                <td>{{ $store->url }}</td>
            </tr>
        </tbody>
    </table>
</div>