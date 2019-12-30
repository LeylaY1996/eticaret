@extends('backoffice.layout.master')

@section('page.title','Hakkımızda')

@section('page-style')
  <link href="/backoffice/asset/css/app.css" rel="stylesheet">
@endsection

@section('content')
<div class="card">
  <div class="card-header">Hakkımızda</div>
      <div class="tab-content" id="oney-tabContent">
        <!--Hakkımızda-->
        <div class="tab-pane fade show active" id="oney-aboutus" role="tabpanel" aria-labelledby="oney-aboutus-tab">
        <form role="form" action="{{route('backoffice.aboutSave')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control" name="title" id="title" placeholder="Başlık" value="">
                  <label for="image">Resim Seç</label>
                  <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="form-group">
                  <img src="{{ asset('backoffice/asset/img/information/') }}" id="image" alt="" style="width:20%">
                </div>
            </div>
            <!-- /.box-body -->
            <div class="form-group">
              <!-- /.box-header -->
              <div class="box-body pad">
                <textarea name="description"
                  id="aboutus"></textarea>
              </div>
            </div>
            <div class="box-footer">
              <input type="submit" class="about-button">
            </div>
          </form>
        </div>
      </div>
  </div>
</div>
<!--End::Portlet-->
@endsection

@section('page-scripts')
<script src="{{asset('backoffice/asset/vendors/ckeditor/ckeditor.js') }}"></script>
<script>
  $(function () {
    // Replace the <textarea id="aboutUs"> with a CKEditor
    // instance, using default configuration.
        CKEDITOR.replace('aboutus');

    });
</script>
@endsection