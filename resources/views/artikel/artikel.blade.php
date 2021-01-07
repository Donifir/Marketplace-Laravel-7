@extends('layouts/index')


@section('judul')Barang

@endsection
@section('conten')
<a href="/artikel/create" class="btn btn-primary mb-4" >Tambah</a>


    @foreach ($artikel ->chunk(4) as $artiChunk)
    <div class="row">
        @foreach ($artiChunk as $arti  )
        <div class="col card mb-1 ml-1 mr-1 ">
            <img class="card-img-top" src="/image/{{ $arti -> gambar }}" alt="Card image cap"  >
            <div class="card-body">
                <h2>  {{ $arti -> nama_barang }} </h2>
                <p>  {{ $arti ['subject'] }} </p>
                <p>  {{ $arti ['stok'] }} </p>
                <p>  {{ $arti ['harga'] }} </p>
                <a href="/artikel/{{ $arti->slug }}" class="btn btn-info  stretched-link">Detail</a>

            </div>
        </div>

        @endforeach

</div>


    @endforeach

    <div>
        {{ $artikel -> links() }}
    </div>
@endsection



