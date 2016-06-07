@extends('app')

@section('content')
<div class="col-sm-12">
  <div class="card-box">
<h4 class="page-title m-t-0 header-title">Kirim Kartu Ucapan</h4>
<div class="text-muted m-b-30 font-13"></div>
<div class="row">
  <form method="post" action="{{ url('greeting') }}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
    <label class="col-md-2 control-label">Nama</label>
    <div class="col-md-12">
      <div class="col-md-12">
    <input type="text" name="nama" class="form-control" placeHolder="Nama">
  </div>
  </div>
  </div>
  <div class="form-group">
  <label class="col-md-2 control-label">Email tujuan</label>
  <div class="col-md-12">
    <div class="col-md-12">
  <input type="text" name="email" class="form-control" id="name_per" placeHolder="Email tujuan">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-2 control-label">Ucapan</label>
<div class="col-md-12">
  <textarea name="ucapan" class="form-control"></textarea>
</div>
</div>
</div>
<br>
<div class="form-group">
  <div class="col-md-12">
  <button type="submit" class="btn btn-success waves-effect waves-light">
                                                     <span class="btn-label"><i class="fa fa-check"></i>
                                                     </span>Simpan</button>
</div>
</div>
</form>
<br>
@endsection
