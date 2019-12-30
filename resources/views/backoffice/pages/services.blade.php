@extends('backoffice.layout.master')

@section('page.title','Ürünler')

@section('content')
<div class="card">
  <div class="card-header">
    <strong>Basic Form</strong>
    Elements
  </div>
  <div class="card-body">
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="title">Başlık</label>
        <div class="col-md-9">
          <input type="text" id="title" name="title" class="form-control" placeholder="Text">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="title">Açıklama</label>
        <div class="col-md-9">
          <textarea type="text" id="description" name="description" class="form-control" placeholder="Açıklamayı giriniz"></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="file-multiple-input">Multiple File input</label>
        <div class="col-md-9">
          <input type="file" id="file-multiple-input" name="file-multiple-input" multiple="">
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection

@section('page-scripts')
@endsection