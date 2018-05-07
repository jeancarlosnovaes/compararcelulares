<div class="table-responsive">
    <table class="table table-bordered table-hover" id="store-table">
        <thead>
            <tr>
                <th>Store Name</th>
                <th>Store Logo</th>
                <th>Store URL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $store->name }}</td>
                <td><img src="../../{{ $store->logo }}" alt="{{ $store->name }}"></td>
                <td><a href="{{ $store->url }}">{{ $store->url }}</a></td>
            </tr>
        </tbody>
    </table>
</div>