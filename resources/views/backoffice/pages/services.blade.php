@extends('backoffice.layout.master')

@section('page.title','Ürünler')

@section('content')
<div class="card">
  <div class="card-header">
    <strong>Basic Form</strong>
    Elements
  </div>
  <div class="card-body">
    <form action="{{ route('backoffice.servicesSave')}} " method="post" enctype="multipart/form-data" class="form-horizontal">
      {{ csrf_field() }}
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="title">Başlık</label>
        <div class="col-md-9">
          <input type="text" id="title" name="title" class="form-control" placeholder="Başlık Giriniz..">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="title">Açıklama</label>
        <div class="col-md-9">
          <textarea type="text" id="description" name="description" class="form-control" placeholder="Açıklamayı giriniz.."></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="file-multiple-input">Resim Yükle</label>
        <div class="col-md-9">
          <input type="file" id="image" name="image" multiple="">
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Kaydet</button>
      </div>
    </form>
  </div>
</div>
<div class="container-fluid">

  <div class="card">
    <div class="card-header">
      <i class="fa fa-edit"></i> Kayıtlı Servisler
    </div>
    <div class="card-body">
      <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
    <div class="row">
      <div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm">
        <option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
        <thead>
          <th>Başlık</th>
          <th>Telefon</th>
          <th>Resim</th>
          <th>İşlemler</th>

        </thead>
        <tbody>
    @foreach ($services as $service)
    <tr role="row" class="odd">
      <td class="sorting_1">{{ $service->title }}</td>
      <td>
        {{ $service->description }}
      </td>
      <td>
        {{ $service->image }}
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
    @endforeach
        </tbody>
      </table>
    </div>
</div>

</div>
@endsection

@section('page-scripts')
@endsection