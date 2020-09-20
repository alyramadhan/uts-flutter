@extends('templates/base')
@section('title','Home')
@section('container')
<div class="container">
<div class="row">
<div class="col-12 text-center">
<h1 class="mt-3">Kalkulator Volume</h1>
</div>
</div>
<div class="row justify-content-center">
<div class="col-5">
<div class="accordion" id="accordionExample">
<div class="card">
<div class="card-header" id="headingOne">
<h2 class="mb-0">
<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
Kalkulator Volume Tabung
</button>
</h2>
</div>
<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
<div class="card-body">
<form action="tabung" method="post">
@csrf
  <div class="form-group">
    <label>Jari Jari</label>
    <input name="jari_jari" type="number" class="form-control" placeholder="Masukkan Jari Jari Tabung Disini">
  </div>
  <div class="form-group">
    <label>Tinggi</label>
    <input name="tinggi" type="number" class="form-control" placeholder="Masukkan Tinggi Tabung Disini">
  </div>
  <a class="btn btn-danger" href="{{'/'}}" role="button">Reset Number</a>
  <button type="submit" class="btn btn-primary">Hasil</button>
</form>
<div class="col-md-6 mt-5">
                    @if(session('infoTabung'))
                    <div class="alert alert-info">
                        {{ session('infoTabung') }}
                    </div>
                    @endif
                </div>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="headingTwo">
<h2 class="mb-0">
<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
Kalkulator Volume Bola
</button>
</h2>
</div>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
<div class="card-body">
<form action="bola" method="post">
@csrf
  <div class="form-group">
    <label>Jari Jari</label>
    <input name="jari_jari" type="number" class="form-control" placeholder="Masukkan jari Jari Bola Disini">
  </div>
  <a class="btn btn-danger" href="{{'/'}}" role="button">Reset Number</a>
  <button type="submit" class="btn btn-primary">Hasil</button>
</form>
<div class="col-md-6 mt-5">
                    @if(session('infoBola'))
                    <div class="alert alert-info">
                        {{ session('infoBola') }}
                    </div>
                    @endif
                </div>
</div>
</div>
</div>
<div class="card">
<div class="card-header" id="headingThree">
<h2 class="mb-0">
<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
Kalkulator Ruang Kerucut
</button>
</h2>
</div>
<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
<div class="card-body">
<form action="kerucut" method="post">
@csrf
  <div class="form-group">
    <label>Luas Alas</label>
    <input name="luasAlas" type="number" class="form-control" placeholder="Masukkan Jari Jari Kerucut Disini">
  </div>
  <div class="form-group">
    <label>Tinggi</label>
    <input name="tinggi" type="number" class="form-control" placeholder="Masukkan Tinggi Kerucut Disini">
  </div>
  <a class="btn btn-danger" href="{{'/'}}" role="button">Reset Number</a>
  <button type="submit" class="btn btn-primary">Hasil</button>
</form>
<div class="col-md-6 mt-5">
                    @if(session('infoKerucut'))
                    <div class="alert alert-info">
                        {{ session('infoKerucut') }}
                    </div>
                    @endif
                </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection