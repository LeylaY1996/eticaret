@extends('backoffice.layout.master')

@section('page.title','Kampanyalar')

@section('content')

<div class="card-body">
  <!--Modallar(kategori ekle ve soru ekle)-->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#primaryModal"> Kategori
    ekle</button>

  <!--Modallar(kategori ekle ve soru ekle)-->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#primaryModal2">Soru
    ekle</button>
</div>
  <div class="card">
    <div class="card-header">
      <strong>Basic Form</strong>
      Elements
    </div>
    <div class="card">
      <div class="card-header">
        <i class="fa fa-align-justify"></i> Carousel
        <small>with indicators</small>
      </div>
      <div class="card-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" alt="First slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9270%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9270%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9296875%22%20y%3D%22217.75625%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9272%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9272%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3203125%22%20y%3D%22217.75625%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide" alt="Third slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9273%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9273%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22277.0078125%22%20y%3D%22217.75625%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="form-group row">
          <label class="col-md-3 col-form-label" for="text-input">Text Input</label>
          <div class="col-md-9">
            <input type="text" id="text-input" name="text-input" class="form-control" placeholder="Text">
            <span class="help-block">This is a help text</span>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label" for="textarea-input">Textarea</label>
          <div class="col-md-9">
            <textarea id="textarea-input" name="textarea-input" rows="9" class="form-control" placeholder="Content.."></textarea>
          </div>
        </div>
        <label for="postal-code">Postal Code</label>
        <input type="text" class="form-control" id="postal-code" placeholder="Postal Code">
        <label for="postal-code">Postal Code</label>
        <input type="text" class="form-control" id="postal-code" placeholder="Postal Code">
      </form>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
      <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
    </div>
  </div>
  <div class="modal fade" id="primaryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
	style="display: none;">
	<div class="modal-dialog modal-primary" role="document">
		<form action="#" method="POST"></form>
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Kategori Başlıkları</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<!--	item->faq_category->title-->
			<form action="" method="post">
				{{ csrf_field() }}
				<div class="modal-body">
					<div class="form-group">
						Kategori Ekle
						<input type="text" name="title" id="title" size="60">
					</div>

					<div class="form-group">
						<label for="image">Resim Seç</label>
						<input type="file" name="image" id="image" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
					<button type="submit" class="btn btn-primary">Ekle</button>
				</div>
		</div>
		</form>
	</div>
	<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>


<div class="modal fade" id="primaryModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
	aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-primary" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Sorular</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<form action="" method="post">
				{{ csrf_field() }}
				<div class="modal-body">
					<div class="form-group">
						<label for="faq_category_id">Kategoriler</label>
						<select class="form-control" id="faq_category_id" name="faq_category_id">
								<option value=""></option>
						</select>
					</div>
					<br>
					<div class="form-group">
						<label for="question">Soru</label>
						<input class="form-control" type="text" id="question" name="question" size="51">
					</div>
					<div class="form-group">
						<label for="answer">Cevap</label>
						<input class="form-control" type="text" id="answer" name="answer" size="50">
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
					<button type="submit" class="btn btn-primary">Kaydet</button>
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
@endsection

@section('page-scripts')
@endsection