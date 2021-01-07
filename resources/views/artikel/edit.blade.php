@extends('layouts/index')


@section('judul')

Halaman Edit

@endsection

@section('conten')




<form action="/artikel/{{ $artikel->id }}" method="post" enctype="multipart/form-data" >
    @csrf
    @method('PUT')
    <div class="form-group mt-4">
      <label for="nama_barang">Nama Menu</label>
      <input type="teks" class="form-control" id="nama_barang" name="nama_barang"
        value="{{ old('nama_barang') ? old('nama_barang') :$artikel ->nama_barang }}">
        @error('nama_barang')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    {{-- <div class="form-group mt-4">
        <label for="stok">Stok</label>
        <input type="teks" class="form-control" id="stok" name="stok"
          value="{{ old('stok') ? old('stok') :$artikel ->stok }}">
          @error('stok')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div> --}}
      <div class="form-group mt-4">
        <label for="stok">Stok</label>
        <select class="form-control" id="stok" name="stok" value="">
          <option>{{ old('stok') ? old('stok') :$artikel ->stok }}</option>
          <option selected>Tersedia</option>
          <option>Stok Habis</option>
        </select>
        @error('stok')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>


      <div class="form-group mt-4">
        <label for="harga">Harga</label>
        <input type="teks" class="form-control" id="harga" name="harga"
          value="{{ old('harga') ? old('harga') :$artikel ->harga }}">
          @error('harga')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>

    <div class="form-group">
      <label for="keterangan">keterangan</label>
      <textarea class="form-control" id="keterangan" name="keterangan" rows="3" >{{ old('keterangan') ? old('tittle') :$artikel ->keterangan }}</textarea>
      @error('keterangan')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    @if ($artikel->gambar)
        <img src="/image/{{ $artikel -> gambar }}" width="150">
        @else
        <p>Kamu belum punya gambar</p>

    @endif


    <x-inputfile />
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>




  @endsection



