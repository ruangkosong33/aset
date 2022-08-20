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
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Tambah Data</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{route ('spec.store')}}" class="form-horizontal">
              @csrf
              <div class="card-body">
                    <div class="form-group row">
                      <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                      <div class="col-sm-6">
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang" placeholder="Nama Barang">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="kode" class="col-sm-2 col-form-label">Kode Barang</label>
                      <div class="col-sm-6">
                        <select name="kode_id" class="form-control">
                          <option value="">-Pilih-</option>
                        @foreach ($kode as $row)
                            <option value="{{$row->id}}">{{$row->kode_barang}}</option>
                        @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="register" class="col-sm-2 col-form-label">Merk</label>
                      <div class="col-sm-6">
                        <input type="text" name="merk" class="form-control" id="merk" placeholder="Merk">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="nomor_sertifikat" class="col-sm-2 col-form-label">Sertifikat</label>
                        <div class="col-sm-6">
                          <input type="text" name="nomor_sertifikat" class="form-control" id="nomor_sertifikat" placeholder="Nomor Sertifikat">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="bahan" class="col-sm-2 col-form-label">Bahan</label>
                      <div class="col-sm-6">
                        <input type="text" name="bahan" class="form-control" id="bahan" placeholder="Bahan">
                      </div>  
                    </div>       
                    <div class="form-group row">
                        <label for="asal" class="col-sm-2 col-form-label">Asal</label>
                        <div class="col-sm-6">
                          <input type="text" name="asal" class="form-control" id="asal" placeholder="asal">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="tahun_beli" class="col-sm-2 col-form-label">Tahun Beli</label>
                      <div class="col-sm-6">
                        <input type="text" name="tahun_beli" class="form-control" id="tahun_beli" placeholder="Tahun Beli">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="ukuran" class="col-sm-2 col-form-label">Ukuran</label>
                      <div class="col-sm-6">
                        <input type="text" name="ukuran" class="form-control" id="ukuran" placeholder="Ukuran">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="harga_satuan" class="col-sm-2 col-form-label">Harga Satuan</label>
                      <div class="col-sm-6">
                        <input type="text" name="harga_satuan" class="form-control" id="harga_satuan" placeholder="Harga Satuan">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="keadaan_barang" class="col-sm-2 col-form-label">Keadaan Barang</label>
                      <div class="col-sm-6">
                        <input type="text" name="keadaan_barang" class="form-control" id="keadaan_barang" placeholder="Keadaan Barang">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="jumlah_barang" class="col-sm-2 col-form-label">Jumlah Barang</label>
                      <div class="col-sm-6">
                        <input type="text" name="jumlah_barang" class="form-control" id="jumlah_barang" placeholder="Jumlah Barang">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                      <div class="col-sm-6">
                        <input type="text" name="harga" class="form-control" id="harga" placeholder="Harga">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="ruang" class="col-sm-2 col-form-label">Sub Ruang</label>
                      <div class="col-sm-6">
                        <select name="ruang_id" class="form-control">
                          <option value="">-Pilih-</option>
                        @foreach ($ruang as $rows)
                            <option value="{{$rows->id}}">{{$rows->nama_ruang}}</option>
                        @endforeach
                        </select>
                      </div>
                    </div>
              </div>
          </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-info">Simpan</button>
                      <a href="{{route ('spec.index')}}" button type="submit" class="btn btn-default">Kembali</a>
                    </div>
                    <!-- /.card-footer -->
            </form>
          </div>
      </div>
    </div>
    <!-- /.card -->
  </section>
</div>

@endsection



