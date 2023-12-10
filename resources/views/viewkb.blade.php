@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')
    <title>View Data Pegawai</title>


    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Tambah Data Pegawai</h3>

    <a href="/pegawai" class="btn btn-secondary"> Kembali</a>
    <br/>
    <br/>

    @foreach ($keranjangbelanja as $kb)
        <form action="/keranjangbelanja/storee" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-4 border">

                </div>
                <div class="col-sm-8 ">
                    <div class="form-group row">
                        <label for="ID" class="col-sm-2 control-label">ID Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ID" name="ID" value="{{ $kb->ID }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="KodeBarang" class="col-sm-2 control-label">Kode Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="KodeBarang" name="KodeBarang" value="{{ $sp->KodeBarang }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Jumlah" class="col-sm-2 control-label">Jumlah</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="Jumlah" name="Jumlah" value="{{ $sp->Jumlah }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Harga" class="col-sm-2 control-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Harga" name="Harga" value="{{ $sp->Harga }}">
                        </div>
                    </div>
                    <div class="col-sm-8 align-items-center mx-auto"><a href='/keranjangbelanja' class="btn btn-success">OK LAH</a></div>
                </div>
            </div>

        </form>
    @endforeach


@endsection
