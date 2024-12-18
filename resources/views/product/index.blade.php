@extends('layout.app')
@section('content')

<div>
    <a href="{{route('product.create')}}" class="btn btn-success">
        Tambah Produk
    </a>
</div>

<br>
<table class="table" border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($products as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->judul}}</td>
            <td>{{$row->deskripsi}}</td>
            <td>{{$row->harga}}</td>
            <td>
                <a class="btn btn-info" href="{{route('product.show', $row->id)}}">
                    Detail
                </a>
                <a class="btn btn-warning" href="{{route('product.edit', $row->id)}}">
                    Edit
                </a>
                <form action="{{route('product.destroy', $row->id)}}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
