<?php 
	class manusia{ //kelas
		//property
		Var $nama;
		//method
		public function set_name($new_name){
			return $this->nama=$new_name;
		}

		public function get_nama(){
        	return  "nama saya adalah"."&nbsp".$this->nama;
    	}

    	public function bekerja(){
    		return $this->nama."&nbsp"."Bekerja Sebagai Accounting Manager";
    	}
	}


	//instansiasi objek
	$sihab=new manusia();
	$sihab->set_name("sihabudin ali");

	echo $sihab->get_nama()."<br>";
	echo $sihab->bekerja();

 ?>

 