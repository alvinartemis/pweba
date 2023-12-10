@extends('master2')

@section('title', 'View Data Motor')

@section('konten')
    <title>View Data Motor</title>


    <h2><a>Muhammad Alvin Fairuz Tsany - 5026221151</a></h2>
    <h3>Tambah Data Motor</h3>

    <a href="/sepedamotor" class="btn btn-secondary"> Kembali</a>
    <br/>
    <br/>

    @foreach ($sepedamotor as $sp)
        <form action="/sepedamotor/storeee" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-4 border">

                </div>
                <div class="col-sm-8 ">
                    <div class="form-group row">
                        <label for="merksepedamotor" class="col-sm-2 control-label">Merk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="merksepedamotor" name="merksepedamotor" value="{{ $sp->merksepedamotor }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stocksepedamotor" class="col-sm-2 control-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="stocksepedamotor" name="stocksepedamotor" value="{{ $sp->stocksepedamotor }}">
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label for="umur" class="col-sm-2 control-label">Umur</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="umur" name="umur" value="{{ $sp->pegawai_umur }}">
                        </div>
                    </div> --}}
                    {{-- <div class="form-group row">
                        <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $sp->pegawai_alamat }}">
                        </div>
                    </div> --}}
                    <div class="col-sm-8 align-items-center mx-auto"><a href='/sepedamotor' class="btn btn-success">OK LAH</a></div>
                </div>
            </div>

        </form>
    @endforeach


@endsection
