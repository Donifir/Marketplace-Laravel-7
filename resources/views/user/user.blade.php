@extends('layouts/index')


@section('judul')User

@endsection
@section('conten')

<table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">Nomor</th>
        <th scope="col">Nama</th>
        <th scope="col">Status</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>

        <?php $no = 1; ?>
        @foreach ($user as $users  )
            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $users -> name }}</td>
                <td>User</td>
                <td>{{ $users -> email }}</td>
                <td>{{ $users -> password }}</td>
                <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-success">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>

                        </div>
                    </div>
                    </td>
            </tr>
            @endforeach


      {{-- <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr> --}}

    </tbody>
  </table>

@endsection


{{-- >
    @foreach ($artikel as $arti  )
    <div class="col card mb-1 ml-1 mr-1 ">
        <img class="card-img-top" src="/image/{{ $arti -> gambar }}" alt="Card image cap"  >
        <div class="card-body">
            <h2>  {{ $arti -> nama_barang }} </h2>
            <p>  {{ $arti ['subject'] }} </p>
            <p>  {{ $arti ['stok'] }} </p>
            <p>  {{ $arti ['harga'] }} </p>
            <a href="/artikel/{{ $arti->slug }}" class="btn btn-info btn-sm stretched-link">Detail</a>

        </div>
    </div>


 --}}
