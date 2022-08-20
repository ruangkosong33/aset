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
              <h3 class="card-title">Edit Data</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{route ('spec.update', $spec->id)}}" class="form-horizontal">
              @csrf
              @method('PUT')
              <div class="card-body">
                    <div class="form-group row">
                      <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                      <div class="col-sm-6">
                        <input type="text" name="nama_barang" value="{{$spec->nama_barang}}" class="form-control" id="nama_barang" placeholder="Nama Barang">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="kode" class="col-sm-2 col-form-label">Kode Barang</label>
                      <div class="col-sm-6">
                        <select name="kode_id" class="form-control">
                          <option value="">-Pilih-</option>
                        @foreach ($kode as $kodes)
                            <option value="{{$kodes->id}}">{{$kodes->kode_barang}}</option>
                        @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                      <div class="col-sm-6">
                        <input type="text" name="merk" value="{{$spec->merk}}" class="form-control" id="merk" placeholder="Merk">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="nomor_sertifikat" class="col-sm-2 col-form-label">Sertifikat</label>
                        <div class="col-sm-6">
                          <input type="text" name="nomor_sertifikat" value="{{$spec->nomor_sertifikat}}" class="form-control" id="nomor_sertifikat" placeholder="Nomor Sertifikat">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="bahan" class="col-sm-2 col-form-label">Bahan</label>
                      <div class="col-sm-6">
                        <input type="text" name="bahan" value="{{$spec->bahan}}" class="form-control" id="bahan" placeholder="Bahan">
                      </div>  
                    </div>       
                    <div class="form-group row">
                        <label for="asal" class="col-sm-2 col-form-label">Asal</label>
                        <div class="col-sm-6">
                          <input type="text" name="asal" value="{{$spec->asal}}" class="form-control" id="asal" placeholder="asal">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="tahun_beli" class="col-sm-2 col-form-label">Tahun Beli</label>
                      <div class="col-sm-6">
                        <input type="text" name="tahun_beli" value="{{$spec->tahun_beli}}" class="form-control" id="tahun_beli" placeholder="Tahun Beli">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="ukuran" class="col-sm-2 col-form-label">Ukuran</label>
                      <div class="col-sm-6">
                        <input type="text" name="ukuran" value="{{$spec->ukuran}}" class="form-control" id="ukuran" placeholder="Ukuran">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="harga_satuan" class="col-sm-2 col-form-label">Harga Satuan</label>
                      <div class="col-sm-6">
                        <input type="text" name="harga_satuan" value="{{$spec->harga_satuan}}" class="form-control" id="harga_satuan" placeholder="Harga Satuan">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="keadaan_barang" class="col-sm-2 col-form-label">Keadaan Barang</label>
                      <div class="col-sm-6">
                        <input type="text" name="keadaan_barang" value="{{$spec->keadaan_barang}}" class="form-control" id="keadaan_barang" placeholder="Keadaan Barang">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="jumlah_barang" class="col-sm-2 col-form-label">Jumlah Barang</label>
                      <div class="col-sm-6">
                        <input type="text" name="jumlah_barang" value="{{$spec->jumlah_barang}}" class="form-control" id="jumlah_barang" placeholder="Jumlah Barang">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                      <div class="col-sm-6">
                        <input type="text" name="harga" value="{{$spec->harga}}" class="form-control" id="harga" placeholder="Harga">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="ruang" class="col-sm-2 col-form-label">Nama Ruang</label>
                      <div class="col-sm-6">
                        <select name="ruang_id" class="form-control">
                          <option value="">-Pilih-</option>
                        @foreach ($ruang as $ruangs)
                            <option value="{{$ruangs->id}}">{{$ruangs->nama_ruang}}</option>
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



