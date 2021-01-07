@extends('layouts/index')


@section('judul')Pesanan

@endsection
@section('conten')

<table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Tanggal</th>
        <th scope="col">ID Pesanan</th>
        <th scope="col">Nama Pemesan</th>
        <th scope="col">Jumlah Belanja</th>
        <th scope="col">Aksi</th>

      </tr>
    </thead>
    <tbody>
        {{-- dummy --}}

        {{-- dummy --}}
        <?php $no = 1; ?>
        @foreach ($transaksi as $transaksis  )
            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $transaksis -> tanggal }}</td>
                <td>{{ $transaksis -> id }}</td>
                <td>{{  DB::table('users')->where('id', $transaksis -> user_id)->value('name') }}</td>
                <td>Rp. {{ number_format ($transaksis -> jumlah_harga,0, '', '.') }}</td>
                <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-success">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>

                        </div>
                    </div>
                    </td>
            </tr>
            @endforeach


    </tbody>
  </table>
  {{ $transaksi->links() }}

@endsection

