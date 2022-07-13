@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Data</h3>
    <hr>
    <form method="POST" action="{{url('/laundry')}}">
        @csrf
        <div class="form-group">
            <label>Nama Member</label>
            <select name="nama" class="form-control col-4">
                <option selected>Pilih Member</option>
                <option>==========================</option>
                @foreach($data as $x)
                <option value="{{$x->nama}}">{{$x->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Berat Pakaian</label>
            <input type="text" class="form-control col-4" name="kg">
        </div>
        <div class="form-group">
            <label>Jenis Harga</label>
            <select name="harga" class="form-control col-4">
                <option selected>Pilih Jenis Harga</option>
                <option>==========================</option>
                @foreach($data1 as $y)
                <option value="{{$y->harga}}">{{$y->nama ." - ". $y->harga }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-outline-success">Simpan</button>
    </form>
</div>
@endsection