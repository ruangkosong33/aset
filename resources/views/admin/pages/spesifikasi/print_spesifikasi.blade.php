<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 2px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Data Barang</h1>

<table id="customers">
  
  <tr>
    <th>Nomor</th>
    <th>Nama Barang</th>
    <th>Kode Barang</th>
    <th>Register</th>
    <th>Merk</th>
    <th>Nomor Sertifikat</th>
    <th>Bahan</th>
    <th>Asal</th>
    <th>Tahun Beli</th>
    <th>Ukuran</th>
    <th>Harga Satuan</th>
    <th>Keadaan Barang</th>
    <th>Jumlah Barang</th>
    <th>harga</th>
    <th>Sub Ruang</th>
  </tr>

      @foreach ( $spec as $specs)

  <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$specs->nama_barang}}</td>
    <td>{{$specs->kode->kode_barang}}</td>
    <td>{{$specs->kode->register}}</td>
    <td>{{$specs->merk}}</td>
    <td>{{$specs->nomor_sertifikat}}</td>
    <td>{{$specs->bahan}}</td>
    <td>{{$specs->asal}}</td>
    <td>{{$specs->tahun_beli}}</td>
    <td>{{$specs->ukuran}}</td>
    <td>{{$specs->harga_satuan}}</td>
    <td>{{$specs->keadaan_barang}}</td>
    <td>{{$specs->jumlah_barang}}</td>
    <td>{{$specs->harga}}</td>
    <td>{{$specs->ruang->nama_ruang}}</td>
  </tr>

      @endforeach
      
</table>

</body>
</html>


