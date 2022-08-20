@extends('admin.layouts.b_main')

@section('content')
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Spesifikasi Barang</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main Content -->
    <section class="content">
      <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Spesifikasi Barang</h3>
            <div class="card-tools">
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
    
            <table class="table table-bordered table-striped">
              <tbody>
              @foreach ($spec as $specs)
                <tr>
                  <td style="width:40%">Nama Barang</td>
                  <td>{{$specs->nama_barang}}</td>
                </tr>
                <tr>
                  <td>Kode Barang</td>
                  <td>{{$specs->kode_barang}}</td>
                </tr>
                <tr>
                    <td>Merk</td>
                    <td>{{$specs->merk}}</td>
                </tr>
                <tr>
                    <td>Nomor Sertifikat</td>
                    <td>{{$specs->nomor_sertifikat}}</td>
                </tr>
                  <tr>
                    <td>Bahan</td>
                    <td>{{$specs->bahan}}</td>
                </tr>
                <tr>
                    <td>Asal</td>
                    <td>{{$specs->asal}}</td>
                </tr>
                <tr>
                    <td>Tahun Beli</td>
                    <td>{{$specs->tahun_beli}}</td>
                </tr>
                <tr>
                    <td>Ukuran</td>
                    <td>{{$specs->ukuran}}</td>
                </tr>
                <tr>
                    <td>Harga Satuan</td>
                    <td>{{$specs->harga_satuan}}</td>
                </tr>
                <tr>
                    <td>Keadaan Barang</td>
                    <td>{{$specs->keadaan_barang}}</td>
                </tr>
                <tr>
                    <td>Jumlah Barang</td>
                    <td>{{$specs->jumlah_barang}}</td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>{{$specs->harga}}</td>
                </tr>
                <tr>
                  <td>Sub Ruang</td>
                  <td>{{$specs->nama_ruang}}</td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
      </div>
    </section>
    <!-- /.col -->
</div>

@endsection