@extends('admin.layouts.b_main')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Spesifikasi</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main Content -->
  <section class="content">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Tambah Data</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form method="post" action="{{route ('kode.store')}}" class="form-horizontal">
        @csrf
        <div class="card-body">
          <div class="form-group row">
            <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-6">
              <input type="text" name="kode_barang" class="form-control" id="kode_barang" placeholder="Kode Barang">
            </div>
          </div>
          <div class="form-group row">
            <label for="register" class="col-sm-2 col-form-label">Register</label>
            <div class="col-sm-6">
              <input type="text" name="register" class="form-control" id="register" placeholder="Register">
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info">Simpan</button>
          <a href="{{route ('kode.index')}}" button type="submit" class="btn btn-default">Kembali</a>
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->
  </section>
</div>

@endsection



