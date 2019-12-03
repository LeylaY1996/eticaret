@extends('backoffice.layout.master')

@section('page.title','Sıkça Sorulan Sorular')

@section('content')
<div class="card">
	<div class="card-header">
		İşlemler
	</div>
	<div class="card-body">
		<!--Modallar(kategori ekle ve soru ekle)-->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#primaryModal"> Kategori
			ekle</button>

		<!--Modallar(kategori ekle ve soru ekle)-->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#primaryModal2">Soru
			ekle</button>
	</div>
</div>

<div class="row">
	<div class="col">
		<ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
				<li class="nav-item">
					<a class="nav-link" id="tab" data-toggle="pill" href="#cat" role="tab"
						aria-controls="cat" aria-selected=""></a>
				</li>
		</ul>
		
	</div>
</div>
		<div class="col-sm-12">
		  <div class="card">
			<div class="card-header">
			  <i class="fa fa-align-justify"></i> Collapse
			  <small>accordion</small>
			</div>
			<div class="card-body">
			  <div id="accordion" role="tablist">
				<div class="card">
				  <div class="card-header" role="tab" id="headingOne">
					<h5 class="mb-0">
					  <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				Collapsible Group Item #1
			  </a>
					</h5>
				  </div>

				  <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body">
					  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
					  on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
					  farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				  </div>
				</div>
				<div class="card">
				  <div class="card-header" role="tab" id="headingTwo">
					<h5 class="mb-0">
					  <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				Collapsible Group Item #2
			  </a>
					</h5>
				  </div>
				  <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
					<div class="card-body">
					  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
					  on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
					  farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				  </div>
				</div>
				<div class="card">
				  <div class="card-header" role="tab" id="headingThree">
					<h5 class="mb-0">
					  <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				Collapsible Group Item #3
			  </a>
					</h5>
				  </div>
				  <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
					<div class="card-body">
					  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
					  on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
					  farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
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