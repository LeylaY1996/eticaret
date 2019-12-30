@extends('backoffice.layout.master')

@section('page.title','Kalite ve Müşteri Memnuniyeti Politikası')

@section('content')
<div class="card">
    <div class="card-header">Kalite ve Müşteri Memnuniyeti Politikası</div>
        <div class="tab-content" id="oney-tabContent">
          <!--Hakkımızda-->
          <div class="tab-pane fade show active" id="oney-policy" role="tabpanel" aria-labelledby="oney-policy-tab">
            <form role="form" action="{{route('backoffice.policySave')}}" method="post"
              enctype="multipart/form-data">
              {{ csrf_field() }}
                  <div class="form-group">
                      <input type="text" class="form-control" name="title" id="title" placeholder="Başlık" value="">
                    <label for="image">Resim Seç</label>
                    <input type="file" name="image" id="image" class="form-control">
                    <input type="hidden" name="type" value="1">
                  </div>
               
                    <div class="form-group">
                        <img src="" alt="" style="width:20%">
                    </div>
              </div>
              <!-- /.box-body -->
              <div class="form-group">
                <!-- /.box-header -->
                <div class="box-body pad">
                  <textarea name="description"
                    id="policy"></textarea>
                </div>
              </div>
              <div class="box-footer">
                <input type="submit" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
    
</div>
<!--End::Portlet-->
@endsection

@section('page-scripts')
<script src="{{asset('backoffice/asset/vendors/ckeditor/ckeditor.js') }}"></script>
<script>
  $(function () {
    // Replace the <textarea id="policy"> with a CKEditor
    // instance, using default configuration.
        CKEDITOR.replace('policy');

    });
</script>
@endsection