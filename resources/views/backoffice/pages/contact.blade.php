
@extends('backoffice.layout.master')

@section('page.title','İletişim')

@section('content')
<div class="col-sm-12">
<form action="{{ route('backoffice.contactSave') }}" method="POST">
  {{ csrf_field() }}
    <div class="card">
      <div class="card-header">
        <strong>İletişim Bilgileri</strong>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="adress">Adres</label>
          <input type="text" class="form-control" id="adress" name="adress" placeholder="Adresi giriniz..">
        </div>
        <div class="form-group">
          <label for="mail">Email</label>
          <input type="email" class="form-control" id="mail" name="mail" placeholder="Mail adresini giriniz.">
        </div>
        <div class="form-group">
          <label for="telephone">Telefon</label>
          <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Telefon numaranızı giriniz...">
        </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Kaydet</button>
        </div>
      </div>
    </div>
  </form>
 
  </div>
@endsection

@section('page-scripts')
@endsection