@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Member</h3>
    <hr>
    <a href="{{url('member/create')}}" class="btn btn-success mb-3">Tambah</a>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nama</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th class="text-center">Opsi</th>
            </tr>
        </thead>
        @foreach($data as $x)
        <tr>
            <td>{{$x->nama}}</td>
            <td>{{$x->no_hp}}</td>
            <td>{{$x->alamat}}</td>
            <td class="text-center">
                <form action="{{url('member/'.$x->id)}}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    <a href="{{url('member/'.$x->id.'/edit')}}" class="btn btn-sm btn-warning">Ubah</a>
                    <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection