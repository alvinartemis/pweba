@extends('master')
@section('title','Tambah Nilai')

@section('konten')
	<h3>Tambah Nilai</h3>
    <br>

	<form action="/nilaikuliah/simpan" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right">NRP:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="NRP" placeholder="Masukkan NRP">
            </div>
          </div>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right" >Nilai Angka:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="NilaiAngka" placeholder="Masukkan Nilai Angka">
            </div>
          </div>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right" >SKS:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="SKS" placeholder="Masukkan SKS">
            </div>
          </div>
          <div class="form-group row">
            <div class="control-label col-sm-2 align-right" ></div>
            <div class="col-sm-10">
                <input class="btn btn-success" type="submit" value="Simpan Data">
                |
                <a class="btn btn-warning" href="/nilaikuliah"> Kembali</a>
            </div>
          </div>
	</form>



@endsection
