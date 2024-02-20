<?php
include './distroLinux.php';

class RollingRelease extends DistroLinux {
  public $gayaRilis;

  public function __construct($namaDistribusi, $initSystem, $tahunRilis, $manajerPaket, $basisSistem, $namaKreator, $gayaRilis) {
    parent::__construct($namaDistribusi, $initSystem, $tahunRilis, $manajerPaket, $basisSistem, $namaKreator);
    $this->gayaRilis = $gayaRilis;
  }

  public function tampilkanRingkasan() {
    echo "\nInfo Distribusi Linux Rolling Release" . PHP_EOL;
    echo "\nNama distro : " . $this->namaDistribusi
      . "\nInit sistem : " . $this->initSystem
      . "\nTahun rilis : " . $this->tahunRilis
      . "\nManajer paket : " . $this->manajerPaket
      . "\nBasis sistem : " . $this->basisSistem
      . "\nGaya rilis : " . $this->gayaRilis
      . "\nNama kreator : " . $this->namaKreator
      . PHP_EOL;
  }

  protected function getInfoDistribusi() {
    return array(
      'namaDistribusi' => $this->getNamaDistribusi(),
      'initSystem' => $this->getInitSystem(),
      'tahunRilis' => $this->getTahunRilis(),
      'manajerPaket' => $this->getManajerPaket(),
      'basisSistem' => $this->getBasisSistem(),
      'namaKreator' => $this->getNamaKreator()
    );
  }

  public function getGayaRilis() {
    return $this->gayaRilis;
  }

  public function setInfoRollingRelease($namaDistribusi, $initSystem, $tahunRilis, $manajerPaket, $basisSistem, $namaKreator, $gayaRilis) {
    $this->namaDistribusi = $namaDistribusi;
    $this->initSystem = $initSystem;
    $this->tahunRilis = $tahunRilis;
    $this->manajerPaket = $manajerPaket;
    $this->basisSistem = $basisSistem;
    $this->namaKreator = $namaKreator;
    $this->gayaRilis = $gayaRilis;
  }
}
?>
