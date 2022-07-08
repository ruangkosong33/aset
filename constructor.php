<?php
	class Produk {

		public $judul, $penerbit, $harga;

		public function __construct ($judul= "judul", $penerbit= "penerbit", $harga= 0){

			$this->judul= $judul;
			$this->penerbit= $penerbit;
			$this->harga= $harga;
		}
		public function label (){
			return ("$this->judul, $this->penerbit");
		}

	}

$produk1= new Produk ("Mata Putih", "PF");

echo $produk1->label();

echo "</br>";

$produk2= new Produk ("Ruangkosong");

var_dump($produk2);



