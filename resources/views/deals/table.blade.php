{{--
<div class="row">
    <div class="col-sm-12 col-md-6">
        <label>Show
            <select name="example1_length" aria-controls="example1" class="form-control form-control-sm">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select> entries
        </label>
    </div>
    <div class="col-sm-12 col-md-6">
        <label>Search:
            <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1">
        </label>
    </div>
</div> --}}
<div class="table-responsive">
    <table class="table table-bordered table-hover" id="deals-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Price Old</th>
                <th>Price</th>
                <th>Url</th>
                <th>Report</th>
                <th>Store</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($deals as $deals)
                <tr>
                    <td>{{ $deals->title }}</td>
                    <td>{{ $deals->price_old }}</td>
                    <td>{{ $deals->price }}</td>
                    <td>
                        <a target="blank" href="{{ $deals->url }}">{{ $deals->url }}</a>
                    </td>
                    <td>{{ $deals->report }}</td>
                    <td>{{ $deals->store->name }}</td>
                    <td>
                        {{ Form::open(['route' => ['deals.destroy', $deals->id], 'method' => 'delete']) }}
                        <div class="btn-group d-flex justify-content-center" role="group">
                            <a href="{{ route('deals.show', [$deals->id]) }}" class="btn btn-outline-secondary btn-sm">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('deals.edit', [$deals->id]) }}" class="btn btn-outline-secondary btn-sm">
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
        {{--
        <tfoot>
            <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
            </tr>
        </tfoot> --}}
    </table>
</div>
<div class="row">
    <div class="col-sm-12 col-md-5">
        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
    </div>
    <div class="col-sm-12 col-md-7">
        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
            <ul class="pagination justify-content-end">
                <li class="paginate_button page-item previous disabled" id="example1_previous">
                    <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                </li>
                <li class="paginate_button page-item active">
                    <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                </li>
                <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                </li>
                <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                </li>
                <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                </li>
                <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                </li>
                <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                </li>
                <li class="paginate_button page-item next" id="example1_next">
                    <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                </li>
            </ul>
        </div>
    </div>
</div>