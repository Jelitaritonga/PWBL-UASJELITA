@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Data</h3>
    <hr>
    <form method="POST" action="{{url('/harga')}}">
        @csrf
        <div class="form-group">
            <label>Nama Jenis Harga</label>
            <input type="text" class="form-control col-4" name="nama">
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="text" class="form-control col-2" name="harga">
        </div>
        <button type="submit" class="btn btn-outline-success">Simpan</button>
    </form>
</div>
@endsection