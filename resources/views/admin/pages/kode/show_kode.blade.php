@extends('admin.layouts.b_main')

@section('content')
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kode Barang</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main Content -->
    <section class="content">
      <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Kode Barang</h3>
            <div class="card-tools">
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
    
            <table class="table table-bordered table-striped">
              <tbody>
              @foreach ($kode as $kodes)
                <tr>
                  <td style="width:40%">Kode Barang</td>
                  <td>{{$kodes->kode_barang}}</td>
                </tr>
                <tr>
                  <td>Register</td>
                  <td>{{$kodes->register}}</td>
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