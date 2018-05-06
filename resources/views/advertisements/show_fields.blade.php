<div class="table-responsive">
    <table class="table table-bordered table-hover" id="advertisement-table">
        <thead>
            <tr>
                <th>Platform</th>
                <th>Code</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $advertisement->platform }}</td>
                <td>{{ $advertisement->code }}</td>
                <td>{{ $advertisement->type }}</td>
            </tr>
        </tbody>
    </table>
</div>