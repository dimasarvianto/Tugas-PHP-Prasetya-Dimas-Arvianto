<?php
require_once 'Bidang.php';

$lingkaran1 = new Bidang('lingkaran', 20, 0);
$lingkaran2 = new Bidang('lingkaran', 10, 0);

$persegiPanjang1 = new Bidang('persegi panjang', 4, 10);
$persegiPanjang2 = new Bidang('persegi panjang', 8, 6);

$segitiga1 = new Bidang('segitiga', 9, 12);
$segitiga2 = new Bidang('segitiga', 7, 6);

$luasLingkaran1 = $lingkaran1->luas();
$luasLingkaran2 = $lingkaran2->luas();

$luasPersegiPanjang1 = $persegiPanjang1->luas();
$luasPersegiPanjang2 = $persegiPanjang2->luas();

$luasSegitiga1 = $segitiga1->luas();
$luasSegitiga2 = $segitiga2->luas();

$lingkaran1->cetak($luasLingkaran1);
$lingkaran2->cetak($luasLingkaran2);

$persegiPanjang1->cetak($luasPersegiPanjang1);
$persegiPanjang2->cetak($luasPersegiPanjang2);

$segitiga1->cetak($luasSegitiga1);
$segitiga2->cetak($luasSegitiga2);

