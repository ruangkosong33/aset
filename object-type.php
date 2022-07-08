<?php

	class Produk {
		
		public $laptop, $pabrik, $tahun, $harga ,$garansi;

		public function __construct ($laptop = "laptop", $pabrik = "pabrik", $tahun = 0, $harga = 0, $garansi = "resmi", $bonus= "mouse"){

			$this->laptop = $laptop;
			$this->penerbit = $pabrik;
			$this->tahun = $tahun;
			$this->harga = $harga;
			$this->garansi= $garansi;
			$this->bonus = $bonus;
		}

		public function label (){

			return "$this->pabrik, $this->tahun";
		}
	}

	class CetakInfoProduk {
		public function cetak (Produk $produk){
			$str = "{$produk->laptop} | {$produk->label()}, {$produk->harga}, {$produk->garansi}, {$produk->bonus}";

			return $str;
		}
	}

	class Bonus extends Produk {
		public function getinfo (){
			$str = "Bonus : {$produk->laptop}, {$produk->label}, {$produk->harga}, {$produk->garansi}";

			return $str;
		}

	}

	class aksesoris extends Produk {

		public function getinfo(){
			$str = "Aksesoris"

		}
	}

$produk1 = new Produk ("Dell", "Amerika", 2021, 1000);
$produk2 = new Produk ("Zenbook", "Taiwan", 2022, 500);

echo $produk1->label();
echo "<br>";
echo $produk2->label();

//$info = new CetakInfoProduk();
//echo $info->cetak($produk1);


