@extends('master2')

@section('title', 'Data Motor')

@section('konten')
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>


    <table class="table table-hover">
        <h2><a>Muhammad Alvin Fairuz Tsany - 5026221151</a></h2>
        <h3>Edit Data Motor</h3>

        <a href="/sepedamotor" class="btn btn-secondary"> Kembali</a>

        @foreach ($sepedamotor as $sp)
            <form action="/sepedamotor/updated" method="post">
                {{ csrf_field() }}
                <tr>
                    <input type="hidden" name="id" value="{{ $sp->kodesepedamotor }}"> <br />
                <tr>
                    <div class="form-group row">
                        <td><label for="merksepedamotor" class="col-xs-3 col-form-label mr-2">Merk Motor</label></td>
                        <td>
                            <div class="col-xs-9">
                                <input type="text" required="required" class="form-control" id="merksepedamotor" name="merksepedamotor"
                                    value="{{ $sp->merksepedamotor }}">
                            </div>
                        </td>
                    </div>
                </tr>
                <tr>

                    <div class="form-group row">
                        <td><label for="stocksepedamotor" class="col-xs-3 col-form-label mr-2">Stock</label></td>
                        <td>
                            <div class="col-xs-9">
                                <input type="number" required="required" class="form-control" id="stocksepedamotor" name="stocksepedamotor"
                                    value="{{ $sp->stocksepedamotor }}">
                            </div>
                        </td>
                    </div>
                </tr>
                <tr>

                    <div class="form-group row">
                        <td><label for="tersedia" class="col-xs-3 col-form-label mr-2">Persediaan</label></td>
                        <td>
                            <div class="col-xs-9">
                                <input type="number" required="required" class="form-control" id="tersedia" name="tersedia"
                                    value="{{ $sp->tersedia }}">
                            </div>
                        </td>
                    </div>
                </tr>
                {{-- <tr>

                    <div class="form-group row">
                        <td><label for="alamat" class="col-xs-3 col-form-label mr-2">Alamat</label></td>
                        <td>
                            <div class="col-xs-9">
                                <textarea required="required" class="form-control" id="alamat" name="alamat" value="{{ $p->pegawai_alamat }}"> </textarea>
                            </div>
                        </td>
                    </div>
                </tr> --}}
                </tr>

                <tr>
                    <td><input type="submit" value="Simpan Data" class="btn btn-success"> <br /></td>
                </tr>
            </form>
        @endforeach
    </table>

@endsection
