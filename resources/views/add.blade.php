@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')
    <title>Tambah Data Motor</title>

    <table class=" table table-hover">
        <h2><a>Muhammad Alvin Fairuz Tsany - 5026221151</a></h2>
        <h3>Tambah Data Motor</h3>

        <a href="/sepedamotor" class="btn btn-secondary"> Kembali</a>

        <form action="/sepedamotor/storeee" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <tr>
            {{-- <tr>
                <div class="form-group row">
                    <td><label for="kodesepeda" class="col-xs-3 col-form-label mr-2">Kode Motor</label></td>
                    <td>
                        <div class="col-xs-9">
                            <input type="number" class="form-control" id="kodesepeda" name="kodesepeda">
                        </div>
                    </td>
                </div>
            </tr> --}}
            {{-- Lakukan ulang untuk Jabatan, Umur, dan Alamat --}}
            <tr>
                <div class="form-group row">
                    <td><label for="merk" class="col-xs-3 col-form-label mr-2">Merk Motor</label></td>
                    <td>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="merk" name="merk">
                        </div>
                    </td>
                </div>
            </tr>
            <tr>
                <div class="form-group row">
                    <td><label for="stock" class="col-xs-3 col-form-label mr-2">Stock</label></td>
                    <td>
                        <div class="col-xs-9">
                            <input type="number" class="form-control" id="stock" name="stock">
                        </div>
                    </td>
                </div>
            </tr>
            <tr>
                <div class="form-group row">
                    <td> <label for="tersedia" class="col-xs-3 col-form-label mr-2">Persediaan</label></td>
                    <td>
                        <div class="col-xs-9">
                            <textarea type="number" class="form-control" id="tersedia" name="tersedia"> </textarea>
                        </div>
                    </td>
                </div>
            </tr>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan Data" class="btn btn-success"> <br /></td>
            </tr>

        </form>
    </table>

@endsection
