@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Ubah Data</h3>
    <hr>
    <form method="POST" action="{{url('/member/'.$member->id)}}">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control col-4" name="nama" value="{{$member->nama}}">
        </div>
        <div class="form-group">
            <label>No. HP</label>
            <input type="text" class="form-control col-3" name="no_hp" value="{{$member->no_hp}}">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <!-- <textarea name="alamat" class="form-control col-4" rows="4"></textarea> -->
            <input type="text" class="form-control col-4" name="alamat" value="{{$member->alamat}}">
        </div>
        <button type="submit" class="btn btn-outline-success">Simpan</button>
    </form>
</div>
@endsection