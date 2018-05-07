<div class="table-responsive">
    <table class="table table-bordered table-hover" id="brands-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Logo</th>
                <th>Count</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $brand->name }}</td>
                <td>{{ $brand->description }}</td>
                <td><img src="{{ $brand->logo }}" alt="{{ $brand->name }}"></td>
                <td>{{ $brand->count }}</td>
            </tr>
        </tbody>
    </table>
</div>