@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Data</h3>
    <hr>
    <form method="POST" action="{{url('/member')}}">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control col-4" name="nama">
        </div>
        <div class="form-group">
            <label>No. HP</label>
            <input type="text" class="form-control col-3" name="no_hp">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control col-4" rows="4"></textarea>
            <!-- <input type="text" class="form-control col-4" name="text"> -->
        </div>
        <button type="submit" class="btn btn-outline-success">Simpan</button>
    </form>
</div>
@endsection