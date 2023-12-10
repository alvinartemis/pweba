@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')
<h2>Muhammad Alvin Fairuz Tsany - 5026221151</h2>
<a href='/keranjangbelanja/tambahh' class="btn btn-primary"> + Tambah Barang Baru</a>
<br/>
<br/>
    <table class="table table-striped table-hover">
        <tr>
            <td>Kode Pembelian</td>
            <td>Kode Barang</td>
            <td>Jumlah Barang</td>
            <td>Harga Barang</td>
            <td>Total</td>
            <td>Action</td>
        </tr>
        @foreach ($keranjangbelanja as $kb)
            <tr>
                <td>{{ $kb->ID }}</td>
                <td>{{ $kb->KodeBarang }}</td>
                <td>{{ $kb->Jumlah }}</td>
                <td>{{ $kb->Harga }}</td>
                <td>{{ $kb->Jumlah * $kb->Harga }}
                <td>
                    <a href="/keranjangbelanja/hapuss/{{ $kb->ID}}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach

    </table>

@endsection
