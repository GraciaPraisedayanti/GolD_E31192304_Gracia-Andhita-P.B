<?php
class Kalkulator{
	
	private $angka1 = 1;
	private $angka2 = 2;
	private $angka3 = 3;
	
	function tambah()
	{
		$hasil = $this -> angka1 + $this -> angka2;
		return $hasil = "".$this -> angka1." + ".$this -> angka2." = ".$hasil; 
	}
	
	function kurang()
	{
		$hasil = $this -> angka3 - $this -> angka2;
		return $hasil = "".$this -> angka3." - ".$this -> angka2." = ".$hasil; 
	}
	
	function bagi()
	{
		$hasil = $this -> angka3 / $this -> angka1;
		return $hasil = "".$this -> angka3." / ".$this -> angka1." = ".$hasil; 
	}
	
	function kali()
	{
		$hasil = $this -> angka3 * $this -> angka2;
		return $hasil = "".$this -> angka3." * ".$this -> angka2." = ".$hasil; 
	}
} 

$hasil1 = new Kalkulator();

echo $hasil1 -> tambah();
echo "<br/>";
echo $hasil1 -> kurang();
echo "<br/>";
echo $hasil1 -> bagi();
echo "<br/>";
echo $hasil1 -> kali();
echo "<br/>";
?>