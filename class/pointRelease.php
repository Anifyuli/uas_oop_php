<?php
include './rollingRelease.php';

class PointRelease extends RollingRelease {
  public $nomorVersi;
  public $namaRilis;

  public function __construct($namaDistribusi, $initSystem, $tahunRilis, $manajerPaket, $basisSistem, $namaKreator, $gayaRilis, $nomorVersi, $namaRilis) {
    parent::__construct($namaDistribusi, $initSystem, $tahunRilis, $manajerPaket, $basisSistem, $namaKreator, $gayaRilis);
    $this->nomorVersi = $nomorVersi;
    $this->namaRilis = $namaRilis;
  }

  public function tampilkanRingkasan() {
    echo "\nInfo Distribusi Linux Point Release" . PHP_EOL;
    echo "\nNama distro : " . $this->namaDistribusi
      . "\nInit sistem : " . $this->initSystem
      . "\nTahun rilis : " . $this->tahunRilis
      . "\nManajer paket : " . $this->manajerPaket
      . "\nBasis sistem : " . $this->basisSistem
      . "\nGaya rilis : " . $this->gayaRilis
      . "\nNama kreator : " . $this->namaKreator
      . "\nNomor versi : " . $this->nomorVersi
      . "\nNama rilis : " . $this->namaRilis
      . PHP_EOL;
  }

  public function setInfoPointRelease($namaDistribusi, $initSystem, $tahunRilis, $manajerPaket, $basisSistem, $namaKreator, $gayaRilis, $nomorVersi, $namaRilis) {
    $this->namaDistribusi = $namaDistribusi;
    $this->initSystem = $initSystem;
    $this->tahunRilis = $tahunRilis;
    $this->manajerPaket = $manajerPaket;
    $this->basisSistem = $basisSistem;
    $this->namaKreator = $namaKreator;
    $this->gayaRilis = $gayaRilis;
    $this->nomorVersi = $nomorVersi;
    $this->namaRilis = $namaRilis;
  }

  public function getNomorVersi() {
    return $this->nomorVersi;
  }

  public function getNamaRilis() {
    return $this->namaRilis;
  }
}
?>
