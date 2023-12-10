@extends('master')

@section('title','Nilai Kuliah')

@section('konten')
<h3>Nilai Kuliah</h3>
<a href="/nilaikuliah/buat" class="btn btn-primary"> + Tambah Nilai Kuliah</a>
<br/>
<br>
<table class="table table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>NRP</th>
        <th>Nilai Angka</th>
        <th>SKS</th>
        <th>Nilai Huruf</th>
        <th>Bobot</th>
    </tr>
    @foreach($nilaikuliah as $n)
    <tr>
        <td>{{ $n->ID }}</td>
        <td>{{ $n->NRP }}</td>
        <td>{{ $n->NilaiAngka }}</td>
        <td>{{ $n->SKS }}</td>
        @if ($n->NilaiAngka<=40)
            <td>D</td>
        @elseif ($n->NilaiAngka<=60)
            <td>C</td>
        @elseif ($n->NilaiAngka<=80)
            <td>B</td>
        @elseif ($n->NilaiAngka>=81)
            <td>A</td>
        @endif
        <td>{{$n->NilaiAngka*$n->SKS}}</td>
    </tr>
    @endforeach
</table>
@endsection
