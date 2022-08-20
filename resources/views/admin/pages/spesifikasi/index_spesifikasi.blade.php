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

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Spesifikasi Barang</h3>
              <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                    <a class="nav-link btn-primary active mr-1" href="{{route ('spec.create')}}"><i class="fas fa-plus"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn-info active" href="{{route ('exportpdf')}}"><i class="fas fa-print"></i></a>
                </li>
                </ul>
              </div>
            </div>

            <div class="card-tools">
              <form action="{{route ('spec.search')}}" class="form-inline" method="GET">
                <input type="search" name="search" class="form-control float-right ml-auto" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
              </form>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
  
                @if(session('pesan'))
                <div class="alert alert-success">
                  {{session ('pesan')}}
                </div>
                @endif
      
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Kode Barang</th>      
                    <th>Harga</th>
                    <th>Sub Ruang</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($spec as $k=>$specs)
                  <tr>
                    <td>{{$spec->firstItem() + $k}}</td>
                    <td>{{$specs->nama_barang}}</td>
                    <td>{{$specs->kode->kode_barang}}</td>
                    <td>{{$specs->harga}}</td>
                    <td>{{$specs->ruang->nama_ruang}}</td>
                    <td>
                        <a href="{{route ('spec.edit', $specs->id)}}" class="btn btn-warning btn-sm">
                          <i class="fas fa-edit"></i>
                        </a>
                        <form method="post" action="{{route ('spec.destroy', $specs->id)}}" class="d-inline">
                          @csrf
                          @method('DELETE')
                        <button class="btn btn-sm btn-danger btn-delete">
                          <i class="fas fa-trash"></i>
                        </button>
                        </form>
                        <a href="{{route ('spec.show', $specs->id)}}" class="btn btn-info btn-sm">
                          <i class="fas fa-eye"></i>
                        </a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
            
              Showing
              {{$spec->firstItem()}}
              to
              {{$spec->lastItem()}}
              of
              {{$spec->total()}}
              entries
  
              <div class="pagination pagination-sm m-0 float-right">
                {{ $spec->links() }}   
              </div>
            </div>
        </div>
      </section>
    <!-- /.content -->
  </div>

@endsection