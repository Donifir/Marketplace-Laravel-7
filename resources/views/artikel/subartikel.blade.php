@extends('layouts/index')


@section('judul')
Detail
@endsection

@section('conten')
<img class="card-img-top" src="/image/{{ $article -> gambar }}" alt="Card image cap" style="width: 40%">
<h1>{{ $article->nama_barang }}</h1>
<p><b>Keterangan </b>   :<br>{{ $article->keterangan }}</p>
<p>Harga: {{ $article->harga }}</p>
{{-- <p>Stok :{{ $article->stok }}</p> --}}

<p>Stok :{{ $article->stok }}</p>




<div class="row mb-1">
<a href="/artikel/{{ $article->id }}/edit" class="btn btn-info btn-small mr-2">Edit</a>
                <form action="/artikel/{{ $article->id }}" method="post">
                    @csrf
                    @method('DELETE')
                   <button class="btn btn-small btn-danger">Hapus</button>
                </form>
</div>


@endsection





