@extends('master2')

@section('title', 'Sepeda Motor')

@section('konten')

	<h2>Muhammad Alvin Fairuz Tsany - 5026221151</h2>
	<h3>Data Sepeda Motor</h3>

	<a href="/sepedamotor/add" class="btn btn-primary"> + Tambah Motor Baru</a>

	<br/>
    <p>Cari Merk Motor :</p>
	<form  action="/sepedamotor/find" method="GET" class="form-inline">
		<input class="form-control" type="text" name="find" placeholder="Cari Merk Motor... " value="{{ old("find", isset($find) ? $find : '') }}">
		<input type="submit" value="find" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			{{-- <th>Kode Sepeda Motor</th> --}}
			<th>Merk</th>
			<th>Stock</th>
			<th>Persediaan</th>
            <th></th>
            <th>Action</th>
		</tr>
		@foreach($sepedamotor as $sp)
		<tr>
			{{-- <td>{{ $sp->kodesepedamotor }}</td> --}}
			<td>{{ $sp->merksepedamotor }}</td>
			<td>{{ $sp->stocksepedamotor }}</td>
			<td>{{ $sp->tersedia }}</td>
            <td></td>
            <td>
                <a href="/sepedamotor/viewsp/{{ $sp->kodesepedamotor }}" class="btn btn-success">View</a>
                <a href="/sepedamotor/editt/{{ $sp->kodesepedamotor }}" class="btn btn-warning">Edit</a>

				<a href="/sepedamotor/deleted/{{ $sp->kodesepedamotor }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


    @endsection



