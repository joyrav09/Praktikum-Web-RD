<?php

include "index.html";

class buah{
    var $totalMangga, $totalJambu, $totalSalak;
   
    public function __construct($mangga, $jambu, $salak){
        $this->mangga = $mangga;
        $this->jambu = $jambu;
        $this->salak = $salak;
    }

    public function harga_Mangga(){
        $this->totalMangga = $this->mangga * 15000;
        echo "<p>Harga Mangga : ".$this->totalMangga;
    }

    public function harga_Jambu(){
        $this->totalJambu = $this->jambu * 13000;
        echo "<br>Harga Jambu : ".$this->totalJambu;
    }

    public function harga_Salak(){
        $this->totalSalak = $this->salak * 10000;
        echo "<br>Harga Salak : ".$this->totalSalak;
    }

    public function total(){
        $total = $this->totalMangga + $this->totalJambu + $this->totalSalak;
        echo "<br><br><strong>Total Belanja : Rp. ". $total;
    }
}

$mangga = $_POST["mangga"];
$jambu = $_POST["jambu"];
$salak = $_POST["salak"];

echo "<hr>";
echo "<br><br><h2>Total Belanja</h2>";

$nilai = new buah($mangga, $jambu, $salak);
$nilai->harga_Mangga();
$nilai->harga_Jambu();
$nilai->harga_Salak();
$nilai->total();
?>
