@extends('admin.layouts.b_main')

@section('content')
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sub Ruang</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main Content -->
    <section class="content">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Sub Ruang</h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route ('ruang.create')}}"><i class="fas fa-plus"></i></a>
                </li>
              </ul>
            </div>
          </div>

          <div class="card-tools">
            <form action="{{route ('ruang.search')}}" class="form-inline" method="GET">
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
                  <th>Sub Ruang</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($ruang as $key=>$ruangs)
                <tr>
                  <td>{{$ruang->firstItem() + $key}}</td>
                  <td>{{$ruangs->nama_ruang}}</td>
                  <td>
                      <a href="{{route ('ruang.edit', $ruangs->id)}}" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i>
                      </a>
                      <form method="post" action="{{route ('ruang.destroy', $ruangs->id)}}" class="d-inline">
                        @csrf
                        @method('DELETE')
                      <button class="btn btn-sm btn-danger btn-delete">
                        <i class="fas fa-trash"></i>
                      </button>
                      </form>
                      <a href="{{route('ruang.show', $ruangs->id)}}" class="btn btn-info btn-sm">
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
            {{$ruang->firstItem()}}
            to
            {{$ruang->lastItem()}}
            of
            {{$ruang->total()}}
            entries

            <div class="pagination pagination-sm m-0 float-right">
              {{ $ruang->links() }}   
            </div>
          </div>
        </div>       
    </section>
    <!-- /.col -->
</div>

@endsection