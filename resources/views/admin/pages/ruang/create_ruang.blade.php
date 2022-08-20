@extends('admin.layouts.b_main')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Sub Ruang</h1>
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
      <form method="post" action="{{route ('ruang.store')}}" class="form-horizontal">
        @csrf
        <div class="card-body">
          <div class="form-group row">
            <label for="nama_ruang" class="col-sm-2 col-form-label">Nama Ruang</label>
            <div class="col-sm-6">
              <input type="text" name="nama_ruang" class="form-control" id="nama_ruang" placeholder="Nama Ruang">
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info">Simpan</button>
          <a href="{{route ('ruang.index')}}" button type="submit" class="btn btn-default">Kembali</a>
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->
  </section>
</div>

@endsection



