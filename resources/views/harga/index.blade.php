@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Harga</h3>
    <hr>
    <a href="{{url('harga/create')}}" class="btn btn-success mb-3">Tambah</a>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nama Jenis Harga</th>
                <th>Harga</th>
                <th class="text-center">Opsi</th>
            </tr>
        </thead>
        @foreach($data as $x)
        <tr>
            <td>{{$x->nama}}</td>
            <td>Rp. {{$x->harga}}</td>
            <td class="text-center">
                <form action="{{url('harga/'.$x->id)}}" method="POST">
                    @method('delete')
                    @csrf
                    <a href="{{url('harga/'.$x->id.'/edit')}}" class="btn btn-sm btn-warning">Ubah</a>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection