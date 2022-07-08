<?php 

	class Produk {

		public $judul = "judul",
	           $penerbit = "penerbit",
	           $harga = 10000;

	}

$produk1 = new Produk ();

$produk1->judul = "pablo";

echo $produk1->judul;

