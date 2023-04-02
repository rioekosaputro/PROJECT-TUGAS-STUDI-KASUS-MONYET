<?php

abstract class hewan
{
	public $nama;
	
	abstract public function setInfo($nama);
	abstract protected function getBerjalan();
	abstract protected function getMakan();
	abstract protected function getBersuara();
	abstract protected function getKhusus($khusus);
	
	
}

class monyet extends hewan
{
	protected $khusus;
	//abstract protected function getKendara();
	public function setInfo($nama){
		return $this->nama = $nama;
	}
	public function getBerjalan()
	{
		return "Berjalan";
	}
	
	public function getMakan()
	{
		return "Makan";
	}
	public function getBersuara()
	{
		return "Bersuara";
	}
	public function getKhusus($khusus)
	{
		return $this->khusus = $khusus;
	}
}

$m = new monyet();
echo "hewan ini namanya ".$m->setInfo("Monyet")."<br>";
echo "Mempunyai kemampuan ";
echo $m->getBerjalan().", ";
echo $m->getMakan()." dan ";
echo $m->getBersuara()."<br>";
echo $m->getKhusus("apabila dilatih akan bisa Berkendara seperti naik sepeda yang tidak dipunyai oleh hewan lainnya ");
//$m->getKendara()

	
?>