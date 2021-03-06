@extends('backoffice.layout.master')

@section('page.title','Anasayfa')

@section('content')
<div class="container-fluid">

    <div class="animated fadeIn">
      <div class="card">
        <div class="card-header">
          <i class="fa fa-edit"></i> DataTables
          <div class="card-actions">
            <a href="https://datatables.net">
              <small class="text-muted">docs</small>
            </a>
          </div>
        </div>
        <div class="card-body">
          <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
            <thead>
              <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 68px;">Username</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 68px;">Date registered</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 34px;">Role</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 43px;">Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 52px;">Actions</th></tr>
            </thead>
            <tbody>
            <tr role="row" class="odd">
                <td class="sorting_1">Tullio Luka</td>
                <td>2012/02/01</td>
                <td>Staff</td>
                <td>
                  <span class="badge badge-danger">Banned</span>
                </td>
                <td>
                  <a class="btn btn-success" href="#">
          <i class="fa fa-search-plus "></i>
        </a>
                  <a class="btn btn-info" href="#">
          <i class="fa fa-edit "></i>
        </a>
                  <a class="btn btn-danger" href="#">
          <i class="fa fa-trash-o "></i>

        </a>
                </td>
              </tr><tr role="row" class="even">
                <td class="sorting_1">Walerian Khwaja</td>
                <td>2012/01/01</td>
                <td>Member</td>
                <td>
                  <span class="badge badge-success">Active</span>
                </td>
                <td>
                  <a class="btn btn-success" href="#">
          <i class="fa fa-search-plus "></i>
        </a>
                  <a class="btn btn-info" href="#">
          <i class="fa fa-edit "></i>
        </a>
                  <a class="btn btn-danger" href="#">
          <i class="fa fa-trash-o "></i>
        </a>
                </td>
              </tr></tbody>
          </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 31 to 32 of 32 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
        </div>
      </div>
    </div>

  </div>

@endsection

@section('page-scripts')
@endsection

