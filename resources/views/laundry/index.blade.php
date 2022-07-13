@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Laundry</h3>
    <hr>
    <a href="{{url('laundry/create')}}" class="btn btn-success mb-3">Tambah</a>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nama Pelanggan</th>
                <th>Berat Pakaian</th>
                <th>Harga</th>
                <th class="text-center">Opsi</th>
            </tr>
        </thead>
        @foreach($data as $x)
        <tr>
            <td>{{$x->nama_pel}}</td>
            <td>{{$x->kg}} Kg</td>
            <td>Rp. {{$x->harga}}</td>
            <td class="text-center">
                <form action="{{url('laundry/'.$x->id)}}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    <a href="{{url('laundry/'.$x->id.'/edit')}}" class="btn btn-sm btn-warning">Ubah</a>
                    <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection