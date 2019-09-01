<?php
	abstract class komputer{
		abstract public function lihat_spec();

	}

	class laptop extends komputer{
			public function lihat_spec(){
			return "spec dari abstrac method";
		}
		public function beli_laptop(){
			return "beli laptop";
		}
	}
	class  notebook extends komputer{
		public function lihat_spec(){
			return "ini masih anak si komputer";
		}
	}


	$lp=new laptop();
	echo $lp->beli_laptop();
	echo $lp->lihat_spec();

	$lpp=new notebook();
	echo $lpp->lihat_spec();



 ?>