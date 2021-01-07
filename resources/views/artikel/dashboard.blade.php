@extends('layouts/index')


@section('judul')Dashboard
    @endsection

@section('conten')

<table class="table table-success table-striped">


        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                   @php
                       $a=DB::table("pesanans")->get()->sum("jumlah_harga")
                   @endphp
                    <h3>
                        Rp. {{number_format($a, 0, '', '.')}}</h3>
                    <p>Total Transaksi</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="/pendapatan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                  <div class="inner">
                    <h3>{{ DB::table('users')->count() }} <sup style="font-size: 20px">User</sup></h3>
                    <p>Jumlah User</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="adminuser" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <h3>{{ DB::table('barangs')->count() }} <sup style="font-size: 20px">Barang</sup></h3>
                    <p>Jumlah Barang</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="artikel" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3>{{ DB::table('pesanan_details')->count() }} <sup style="font-size: 20px">Transaksi</sup></h3>
                    <p>Total Transaksi</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
              <!-- Left col -->
              <section class="col-lg-7 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->




              </section>
              <!-- /.Left col -->
              <!-- right col (We are only adding the ID to make the widgets sortable)-->
              <!-- <section class="col-lg-5 connectedSortable">




              </section> -->
              <!-- right col -->
            </div>
            <!-- /.row (main row) -->


          </section>

  </table>

@endsection
