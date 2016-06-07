@extends('app')

@section('content')
<div class="col-sm-12">
  <div class="card-box">
<h4 class="page-title m-t-0 header-title">Edit Data {{$data->nama_perusahaan}}</h4>
<div class="text-muted m-b-30 font-13"></div>
<div class="row">
  <form method="post" action="{{route('update_data')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group">
  <label class="col-md-2 control-label">Nama Perusahaan</label>
  <div class="col-md-12">
    <div class="col-md-12">
  <input type="hidden" name="id" class="form-control" id="id" value="{{$data->id}}">
  <input type="text" name="nama_perusahaan" class="form-control" id="name_per" value="{{$data->nama_perusahaan}}">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-2 control-label">Nama Direktur</label>
<div class="col-md-12">
<div class="col-md-12">
<input type="text" name="nama_dir" class="form-control" id="name_dir" value="{{$data->nama_direktur}}">
</div>
</div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Kontrak</label><br>
  <div class="col-md-12">
<div class="col-md-12">
  <select class="form-control cold-md-6" name="kontrak" data-style="btn-default btn-custom">
  <?php for ($i=1; $i <=50 ; $i++) {

  ?>

<option name="kontrak" value="{{$i}} Bulan">{{$i}} Bulan</option>

<?php } ?>
</select>
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-2 control-label">Harga</label>
<div class="col-md-12">
<div class="col-md-12">
<input type="text" name="harga" class="form-control" id="harga" value="{{$data->harga}}">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-2 control-label">Jatuh Tempo</label>
<div class="col-md-12">
<div class="col-md-12">
<input type="text" name="tempo" class="form-control" id="name_per" value="{{$data->jatuh_tempo}}">
</div>
</div>
</div>
</div><br>

<div class="form-group">
  <div class="col-md-12">
    <button type="button" class="btn btn-default waves-effect waves-light">
                                                   <span class="btn-label"><i class="fa fa-arrow-left"></i>
                                                   </span><a <a href="/view_data" style="color:white">Kembali</a></button>
  <button type="submit" class="btn btn-success waves-effect waves-light">
                                                     <span class="btn-label"><i class="fa fa-check"></i>
                                                     </span>Simpan</button>
</div>
</div>
<br>
</form>
@endsection
