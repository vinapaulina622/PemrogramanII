<?php

class laptop  {
    public  $nama,
            $merk,
            $warna,
            $ukuran,
            $jenis;

    public function nyalakanlaptop() {

    }

    public function matikanlaptop() {

    }
    
    public function fiturlayarsentuh() {

    }

    public function fiturkuncisidikjari() {

    }

    public function aksesfiturcepat() {

    }

    public function aksesaplikasi() {

    }

}

class Laptopwindows extends laptop {
    public $touchpadgesture = false;
    public $multipledesktop = false;

    public function aktifkantouchpadgesture(){
        $this-> touchpadgesture = true;
        return "aktifkan touchpadgesture, dapat mengakses beragam fitur dengan lebih cepat.!";
    }

    public function akifkanmultipledesktop(){
        $this->multipledesktop = true;
        return "aktifkan multipledesktop, dapat membuka aplikasi secara bersamaan dalam satu layar!";
    }
}

class laptopmacbook extends laptop {
    public $touchscreen = false;
    public $pingerprint = false;

    public function modetouchscreen(){
        $this->touchscreen = true;
        return "aktifkan mode touchscreen, dapat memudahkan penggunaan laptop!";
    }

    public function aktifkanpingerprint(){
        $this->pingerprint = true;
        return "aktifkan pingerprint, memudahkan membuka password!";
    }
}

$laptopA = new laptopwindows();
echo $laptopA->aksesfiturcepat();
echo "<br>";
echo $laptopA->aktifkantouchpadgesture();
echo "<br>";
echo $laptopA->aksesaplikasi();
echo "<br>";
echo $laptopA->akifkanmultipledesktop();
echo "<br>";
$laptopB = new laptopmacbook();
echo $laptopB->fiturlayarsentuh();
echo "<br>";
echo $laptopB->modetouchscreen();
echo "<br>";
echo $laptopB->fiturkuncisidikjari();
echo "<br>";
echo $laptopB->aktifkanpingerprint();


echo "<br>";


class kamera  {
    public  $nama,
            $merk,
            $warna,
            $jenis;

    public function nyalakankamera() {

    }

    public function matikankamera() {

    }
    
    public function cetakgambarotomatis() {

    }

    public function pencahayaanobjekotomatis() {

    }

    public function menangkapdetailcloseup() {

    }

    public function stabilitasigambar() {

    }

}

class kamerapolaroid extends kamera {
    public $autoprint = false;
    public $automaticlightingsystem = false;

    public function fiturautoprint(){
        $this-> autoprint = true;
        return "ambil gambar, mencetak gambar secara otomatis!";
    }

    public function fiturautomaticlightingsystem(){
        $this->automaticlightingsystem = true;
        return "ambil gambar, pencahayaan otomatis mengikuti objek!";
    }
}

class kameradigital extends kamera {
    public $modemakro = false;
    public $antishake = false;

    public function fiturmodemakro(){
        $this->modemakro = true;
        return "aktifkan mode makro, untuk menangkap detail close-up!";
    }

    public function aktifkanfiturantishake(){
        $this->antishake = true;
        return "aktifkan fitur anti shake, untuk stabilitasi gambar!";
    }
}

$kameraA = new kamerapolaroid();
echo $kameraA->cetakgambarotomatis();
echo "<br>";
echo $kameraA->fiturautoprint();
echo "<br>";
echo $kameraA->pencahayaanobjekotomatis();
echo "<br>";
echo $kameraA->fiturautomaticlightingsystem();
echo "<br>";
$kameraB = new kameradigital();
echo $kameraB->menangkapdetailcloseup();
echo "<br>";
echo $kameraB->fiturmodemakro();
echo "<br>";
echo $kameraB->stabilitasigambar();
echo "<br>";
echo $kameraB->aktifkanfiturantishake();
?>
