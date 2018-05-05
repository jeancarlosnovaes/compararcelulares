<div class="table-responsive">
    <table class="table table-bordered table-hover" id="deals-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Price Old</th>
                <th>Price</th>
                <th>URL</th>
                <th>Report</th>
                <th>Store</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $deals->title }}</td>
                <td>{{ $deals->description }}</td>
                <td>{{ $deals->price_old }}</td>
                <td>{{ $deals->price }}</td>
                <td>{{ $deals->url }}</td>
                <td>{{ $deals->report }}</td>
                <td>{{ $deals->store->name }}</td>

            </tr>
        </tbody>
    </table>
</div>