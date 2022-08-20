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
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route ('kode.create')}}"><i class="fas fa-plus"></i></a>
                </li>
              </ul>
            </div>
          </div>
          
          <div class="card-tools">
            <form action="{{route ('kode.search')}}" class="form-inline" method="GET">
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
                  <th>Kode Barang</th>
                  <th>Register</th>      
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($kode as $key=>$kodes)
                <tr>
                  <td>{{$kode->firstItem() + $key}}</td>
                  <td>{{$kodes->kode_barang}}</td>
                  <td>{{$kodes->register}}</td>
                  <td>
                      <a href="{{route ('kode.edit', $kodes->id)}}" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i>
                      </a>
                      <form method="post" action="{{route ('kode.destroy', $kodes->id)}}" class="d-inline">
                        @csrf
                        @method('DELETE')
                      <button class="btn btn-sm btn-danger btn-delete">
                        <i class="fas fa-trash"></i>
                      </button>
                      </form>
                      <a href="{{route('kode.show', $kodes->id)}}" class="btn btn-info btn-sm">
                        <i class="fas fa-eye"></i>
                      </a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table> 
          </div>
          <div class="card-footer clearfix">
            
            Showing
            {{$kode->firstItem()}}
            to
            {{$kode->lastItem()}}
            of
            {{$kode->total()}}
            entries

            <div class="pagination pagination-sm m-0 float-right">
              {{ $kode->links() }}   
            </div>
          </div>
        </div>       
    </section>
    <!-- /.col -->
</div>

@endsection