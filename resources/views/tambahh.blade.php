@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')
    <title>Tambah Data Motor</title>

    <table class=" table table-hover">
        <h2><a>Muhammad Alvin Fairuz Tsany - 5026221151</a></h2>
        <h3>Tambah Data Motor</h3>

        <a href="/keranjangbelanja" class="btn btn-secondary"> Kembali</a>

        <form action="/keranjangbelanja/storee" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <tr>
                {{-- <tr>
                    <div class="form-group row">
                        <td><label for="ID" class="col-xs-3 col-form-label mr-2">ID Barang</label></td>
                        <td>
                            <div class="col-xs-9">
                                <input type="number" class="form-control" id="ID" name="ID">
                            </div>
                        </td>
                    </div>
                </tr> --}}
                {{-- Lakukan ulang untuk Jabatan, Umur, dan Alamat --}}
            <tr>
                <div class="form-group row">
                    <td><label for="kodebarang" class="col-xs-3 col-form-label mr-2">Kode Barang</label></td>
                    <td>
                        <div class="col-xs-9">
                            <input type="number" class="form-control" id="kodebarang" name="kodebarang">
                        </div>
                    </td>
                </div>
            </tr>
            <tr>
                <div class="form-group row">
                    <td><label for="jumlah" class="col-xs-3 col-form-label mr-2">Jumlah Barang</label></td>
                    <td>
                        <div class="col-xs-9">
                            <input type="number" class="form-control" id="jumlah" name="jumlah">
                        </div>
                    </td>
                </div>
            </tr>
            <tr>
                <div class="form-group row">
                    <td> <label for="harga" class="col-xs-3 col-form-label mr-2">Harga Barang</label></td>
                    <td>
                        <div class="col-xs-9">
                            <input type="number" class="form-control" id="harga" name="harga">
                        </div>
                    </td>
                </div>
            </tr>
            </tr>
            <tr>
                <td><input type="submit" value="Save Data" class="btn btn-success"> <br /></td>
            </tr>

        </form>
    </table>

@endsection
