@extends('layouts/index')


@section('judul')Tambah Menu
@endsection

@section('conten')




<form action="/artikel" method="post" enctype="multipart/form-data">
    @csrf

    <x-input field="nama_barang" judul="Menu" type="teks"/>
    <x-input field="stok" judul="Stok" type="teks"/>
    <x-input field="harga" judul="harga" type="teks"/>
    <x-texarea subject="keterangan" isisubject="keterangan"/>
    <x-inputfile />



    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


  @endsection



