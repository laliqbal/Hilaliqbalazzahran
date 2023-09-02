<?php
class Pengadaian
{
    var $BesarPinjam;
    var $PersentaseBunga;
    var $TotalPinjam;
    var $LamaAngsuran;
    var $BesarAngsuran;
    var $Kontak;
    var $Alamat;
    var $NamaToko;

    
    function Peminjaman()
    {
        if ($this->BesarPinjam <= 0 || $this->PersentaseBunga <= 0 || $this->LamaAngsuran <= 0) {
            return "Mohon masukkan nilai yang valid.";
        }

        $this->TotalPinjam = $this->BesarPinjam + ($this->BesarPinjam * ($this->PersentaseBunga / 100));

        $this->BesarAngsuran = $this->TotalPinjam / $this->LamaAngsuran;

        return "Perhitungan Peminjaman selesai.";
    }
}


$pengadaian = new Pengadaian();


$pengadaian->BesarPinjam = 1000000;
$pengadaian->PersentaseBunga = 10;
$pengadaian->LamaAngsuran = 5;
$pengadaian->Kontak = "08123456789";
$pengadaian->Alamat = "Jalan Contoh No. 123";
$pengadaian->NamaToko = "Toko Pegadaian Syariah";


$pesan = $pengadaian->Peminjaman();


echo "Nama Toko: " . $pengadaian->NamaToko . "\n";
echo "<br>";
echo "Alamat: " . $pengadaian->Alamat . "\n";
echo "<br>";
echo "Kontak: " . $pengadaian->Kontak . "\n";
echo "<br>";
echo "Besar Pinjam: " . $pengadaian->BesarPinjam . " IDR\n";
echo "<br>";
echo "Persentase Bunga: " . $pengadaian->PersentaseBunga . "%\n";
echo "<br>";
echo "Lama Angsuran: " . $pengadaian->LamaAngsuran . " bulan\n";
echo "<br>";
echo "Besar Angsuran: " . $pengadaian->BesarAngsuran . " IDR per bulan\n";
echo "<br>";
echo "Total Pinjam: " . $pengadaian->TotalPinjam . " IDR\n";
echo "<br>";
echo $pesan; 
?>