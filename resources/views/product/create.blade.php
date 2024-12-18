@extends("layout.app")

@section('content')
    


    <div class="m-3">
        <form action="{{url('product/store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="coll=-sm-8 mt-2">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Masukan Judul" value="" required="">
            </div>
            <div class="coll=-sm-8 mt-2">
                <label for="deskripsi" class="form-label">deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" placeholder="Masukan deskripsi" value="" required="">
            </div>
            <div class="coll=-sm-8 mt-2">
                <label for="harga" class="form-label">harga</label>
                <input type="text" class="form-control" name="harga" placeholder="Masukan harga" value="" required="">
            </div>
            <div class="coll=-sm-8 mt-2">
                <a href="{{route('product.index')}}" class="btn btn-seccondary">Batal</a>
                <button type="submit" class="btn btn-success">Simpan</button>
                
            </div>
        </form>
    </div>

@endsection