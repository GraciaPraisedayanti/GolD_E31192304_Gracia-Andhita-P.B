<?php
// Buat Class
class Kendaraan {
	// properties
	var $jenisKendaraan;
	var $jumlahRoda;
	var $merk;
	var $bahanBakar;
	var $harga;
	var $tahunPembuatan;

	public function statusSubsidi()
	{
		if ($this->bahanBakar = 'premium' && $this->tahunPembuatan < 2005) $status = 'Ya';
		else $status = 'Tidak';
		return $status;
	}
}
?>