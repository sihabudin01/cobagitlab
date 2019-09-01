<?php 
	class bangun_datar{
		private $sisi;//

		//  private function __construct(){
		// 	echo "belajar oop mudah sekali<br>";
		// }

		 private function buat(){
			return "buat oop dengan class bangun datar";
		}

		 function __destruct(){
			echo "<br>"."destruct selalu terakhir";
		}
	}

	class persegi extends bangun_datar{

		function buat(){
			echo "<br>"."buat oop gampang kan!!!";
		}

		function buat_oop(){
			return parent::buat();
		}



		 function input($input_sisi){
			return $this->sisi=$input_sisi;
		}
 		

		function luas(){
			return $this->sisi * $this->sisi;
		}

		 function keliling(){
			return $this->sisi*4;
		}

	}



	$kotak=new persegi();
	$kotak->input(5);

	echo "Luas persegi adalah"."&nbsp".$kotak->luas()."<br>";
	echo "Keliling persegi adalah"."&nbsp".$kotak->keliling()."<br>";
	echo "<br>".$kotak->buat_oop();
	echo "<br>".$kotak->buat();


	// $coba=new bangun_datar();
	// echo $coba->buat();
 // ?>