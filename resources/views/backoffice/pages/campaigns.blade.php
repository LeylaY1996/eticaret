@extends('backoffice.layout.master')

@section('page.title','Kampanyalar')

@section('content')
<div class="card">
  <div class="card-header">Kampanyalar</div>
      <div class="tab-content" id="oney-tabContent">
        <!--Hakkımızda-->
        <div class="tab-pane fade show active" id="oney-campaings" role="tabpanel" aria-labelledby="oney-campaings-tab">
        <form role="form" action="{{route('backoffice.campaignsSave')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="title">Başlık</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Başlık" value="">
              </div>
              <div class="form-group">
                <label for="image">Resim Seç</label>
                <input type="file" name="image" id="image" class="form-control">
              </div>
              <div class="form-group">
                <label for="price">Fiyat</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Fiyat" value="">
              </div>
              <div class="form-group">
                <label for="amount">Miktar(Adet)</label>
                <input type="text" class="form-control" name="amount" id="amount" placeholder="Miktar" value="">
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
            <div class="card-footer">
              <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Kaydet</button>
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