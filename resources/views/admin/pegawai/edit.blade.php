@extends('admin.layout.appadmin')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

@foreach ($pegawai as $p)
<h1 align="center">Form Edit Pegawai</h1>

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
  <li> {{$error}}</li>
    @endforeach
</ul>

</div>
@endif
<form method="POST" action="{{url('admin/pegawai/update')}}" enctype="multipart/form-data">
    {{csrf_field()}}
  <div class="form-group row">
    <input type="hidden" name="id" value="{{$p->id}}"/>
    <label for="text1" class="col-4 col-form-label">NIP</label> 
    <div class="col-8">
      <input id="text1" name="nip" type="text" class="form-control" value="{{$p->nip}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text" name="nama" type="text" class="form-control" value="{{$p->nama}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Jabatan</label> 
    <div class="col-8">
      <select id="select" name="jabatan_id" class="custom-select">
        @foreach($jabatan as $j)
        @php $sel = ($j->id == $p->jabatan_id) ? 'selected' : ''; @endphp
        <option value="{{$j->id}}" {{$sel}}>{{$j->nama}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="select1" class="col-4 col-form-label">Divisi</label> 
    <div class="col-8">
      <select id="select1" name="divisi_id" class="custom-select">
      @foreach ($divisi as $d) 
     @php $sel = ($d->id == $p->divisi_id) ? 'selected' : ''; @endphp
      <option value="{{$d->id}}" {{$sel}}>{{$d->nama}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      @foreach($ar_gender as $gender)
      @php $cek = ($gender == $p->gender) ? 'checked' : ''; @endphp
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="radio_0" type="radio" class="custome-control-input" value="{{$gender}}" {{$cek}}> 
        <label for="radio_0" class="form-check-label">{{$gender}}</label>
      </div>
      <!-- <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="radio_1" type="radio" class="custom-control-input" value="P"> 
        <label for="radio_1" class="custom-control-label">Perempuan</label>
      </div> -->
      @endforeach
      
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="text2" name="tmp_lahir" type="text" class="form-control" value="{{$p->tmp_lahir}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="text3" name="tgl_lahir" type="date" class="form-control" value="{{$p->tgl_lahir}}">
    </div>
  </div>
  <!-- penambahan kekayaan pada edit -->
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Kekayaan</label> 
    <div class="col-8">
      <input id="text2" name="kekayaan" type="text" class="form-control" value="{{$p->kekayaan}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="textarea" name="alamat" cols="40" rows="5" class="form-control">{{$p->alamat}}</textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
      <input id="text4" name="foto" type="file" class="form-control">
      <div>
      @if(!empty($p->foto))
      <img src="{{url('admin/image')}}/{{$p->foto}}" width="100%">
      
      <br> {{$p->foto}}
      @endif
</div>
     
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endforeach



@endsection