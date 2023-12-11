@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')
<div> <h3>Pilih Kategori</h3>
<form action="/kategori/posted" method="post">
    <select name="Nama" class="custom-select">
      @foreach ($kategori as $kg )
      <option value="ID">{{$kg->Nama}}</option>
      @endforeach
    </select>
    <br>
    <input type="submit" value="Save Data" class="btn btn-success">

  </form>

@endsection
