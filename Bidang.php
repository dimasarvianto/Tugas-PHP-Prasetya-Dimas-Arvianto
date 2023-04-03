<?php

class Bidang {
    public $nama;
    public $nilai1;
    public $nilai2;

    public function __construct($nama, $nilai1, $nilai2) {
        $this->nama = $nama;
        $this->nilai1 = $nilai1;
        $this->nilai2 = $nilai2;
    }

    public function luas() {
        switch ($this->nama) {
            case 'lingkaran':
                $luas = 3.14 * pow($this->nilai1, 2);
                break;
            case 'persegi panjang':
                $luas = $this->nilai1 * $this->nilai2;
                break;
            case 'segitiga':
                $luas = 0.5 * $this->nilai1 * $this->nilai2;
                break;
            default:
                $luas = 0;
                break;
        }
        return $luas;
    }

    public function cetak($luasBidang) {
        echo "<table style='border-collapse: collapse; width: 30%;'>";
        echo "<tr style='background-color: #87CEEB;'><td style='border: 1px solid black; padding: 5px; width: 30%;'>Nama Bidang</td><td style='border: 1px solid black; padding: 5px; width: 20%;'>Nilai 1</td><td style='border: 1px solid black; padding: 5px; width: 20%;'>Nilai 2</td><td style='border: 1px solid black; padding: 5px; width: 30%;'>Luas</td></tr>";
        echo "<tr style='background-color: #F6F1E9;'><td style='border: 1px solid black; padding: 5px;'>".$this->nama."</td><td style='border: 1px solid black; padding: 5px;'>".$this->nilai1."</td><td style='border: 1px solid black; padding: 5px;'>".$this->nilai2."</td><td style='border: 1px solid black; padding: 5px;'>".$luasBidang."</td></tr>";
        echo "</table>";
    }
}

?>
