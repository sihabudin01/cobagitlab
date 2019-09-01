<?php 
	class laptop{
		const harga='5000000';
		public $unit;

		//set jumlah beli
		 public function setjumlah_beli($jml){
			return $this->unit=$jml;
		}
		 public function getjumlah_beli(){
			return $this->unit*laptop::harga;
		}
	}

		//buat class anak
		class acer extends laptop{
			public function setjumlah_beli($jml){
				return $this->unit=$jml;
			}	
			public function getjumlah_beli(){
				return $this->unit*parent::harga;
		}


		}

		// //static properti
		// public static $harga_beli;

		// //static method
		// public static function beli_laptop(){
		// 	return "beli laptop seharga Rp".self::$harga_beli;
		// }	

	$lp_baru=new acer();
	$lp_baru->setjumlah_beli(5);
	echo "total harga laptop adalah".$lp_baru->getjumlah_beli();

	// //set static property
	// laptop::$harga_beli=4000000;

	// //panggil static method
	// echo laptop::beli_laptop();





 ?>