<?php
class DistroLinux {
  public $namaDistribusi;
  public $initSystem;
  public $tahunRilis;
  public $manajerPaket;
  public $basisSistem;
  public $namaKreator;

  public function __construct($namaDistribusi, $initSystem, $tahunRilis, $manajerPaket, $basisSistem, $namaKreator) {
    $this->namaDistribusi = $namaDistribusi;
    $this->initSystem = $initSystem;
    $this->tahunRilis = $tahunRilis;
    $this->manajerPaket = $manajerPaket;
    $this->basisSistem = $basisSistem;
    $this->namaKreator = $namaKreator;
  }

  public function getNamaDistribusi() {
    return $this->namaDistribusi;
  }

  public function getInitSystem() {
    return $this->initSystem;
  }

  public function getTahunRilis() {
    return $this->tahunRilis;
  }

  public function getManajerPaket() {
    return $this->manajerPaket;
  }

  public function getBasisSistem() {
    return $this->basisSistem;
  }

  public function getNamaKreator() {
    return $this->namaKreator;
  }

  public function setInfoDistribusi($namaDistribusi, $initSystem, $tahunRilis, $manajerPaket, $basisSistem, $namaKreator) {
    $this->namaDistribusi = $namaDistribusi;
    $this->initSystem = $initSystem;
    $this->tahunRilis = $tahunRilis;
    $this->manajerPaket = $manajerPaket;
    $this->basisSistem = $basisSistem;
    $this->namaKreator = $namaKreator;
  }
}
?>
