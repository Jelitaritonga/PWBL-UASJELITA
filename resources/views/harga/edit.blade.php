@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Ubah Data</h3>
    <hr>
    <form method="POST" action="{{url('/harga/'.$harga->id)}}">
        @method('put')
        @csrf
        <div class="form-group">
            <label>Nama Jenis Harga</label>
            <input type="text" class="form-control col-4" name="nama" value="{{$harga->nama}}">
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="text" class="form-control col-2" name="harga" value="{{$harga->harga}}">
        </div>
        <button type="submit" class="btn btn-outline-success">Simpan</button>
    </form>
</div>
@endsection