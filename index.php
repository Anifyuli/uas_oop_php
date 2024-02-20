<?php
include './class/distroLinux.php';
include './class/rollingRelease.php';
include './class/pointRelease.php';

class Debian extends PointRelease {
  private $nomorVersiMinor;
  
  public function __construct($namaDistribusi, $initSystem, $tahunRilis, $manajerPaket, $basisSistem, $namaKreator, $gayaRilis, $nomorVersi, $namaRilis, $nomorVersiMinor) {
    parent::__construct($namaDistribusi, $initSystem, $tahunRilis, $manajerPaket, $basisSistem, $namaKreator, $gayaRilis, $nomorVersi, $namaRilis);
    $this->nomorVersiMinor = $nomorVersiMinor;
  }

  public function cetakInfoDistribusi() {
    $this->tampilkanRingkasan();
    echo "Nomor versi minor : " . $this->nomorVersiMinor . PHP_EOL;
  }

  public function setNomorVersiMinor($nomorVersiMinor) {
    $this->nomorVersiMinor = $nomorVersiMinor;
  }

  public function getNomorVersiMinor() {
    return $this->nomorVersiMinor;
  }
}

$archLinux = new RollingRelease("Arch Linux", "systemd", 2002, "pacman", "Independen", "Judd Vinet", "Rolling release - Bleeding Edge");
$artixLinux = new RollingRelease("Artix Linux", "OpenRC, s6, 66, Dinit", 2017, "pacman", "Arch", "Marcus von Ditfurth, Chris Cromer, Oscar Campos, Christos Nouskas", "Rolling release - Bleeding Edge");

$chrunchBangPlusPlus = new PointRelease("ChrunchBang++", "systemd", 2019, "apt, dpkg", "Debian", "Ben Young, Neal Flutz", "Point release, LTS support", 12 , "N/A");
$devuan = new PointRelease("Devuan", "SysVinit, runit, OpenRC", 2016, "apt, dpkg", "Debian", "VUA (Veteran UNIX Admins) Team", "Point Release (Debian Stable derived), Rolling Release (Debian Sid derived)", 5.0, "Daedalus (stable release), Excalibur (Debian Trixie derived), Ceres (Debian Sid derived)");
$fedoraLinux = new PointRelease("Fedora Linux", "systemd", 2003, "dnf, rpm", "Independen", "Fedora Project", "Point release (stable channel), Rolling release (Unstable channel, known as Fedora Rawhide)", 39, "N/A");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/favicon.svg" type="image/x-icon">
    <title>Daftar Distro Linux</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Daftar Distro Linux</h2>

<table>
    <tr>
        <th>Nama Distro</th>
        <th>Init System</th>
        <th>Tahun Rilis</th>
        <th>Manajer Paket</th>
        <th>Basis Sistem</th>
        <th>Gaya Rilis</th>
        <th>Nama Kreator</th>
    </tr>
    <tr>
        <td><?php echo $archLinux->getNamaDistribusi(); ?></td>
        <td><?php echo $archLinux->getInitSystem(); ?></td>
        <td><?php echo $archLinux->getTahunRilis(); ?></td>
        <td><?php echo $archLinux->getManajerPaket(); ?></td>
        <td><?php echo $archLinux->getBasisSistem(); ?></td>
        <td><?php echo $archLinux->getGayaRilis(); ?></td>
        <td><?php echo $archLinux->getNamaKreator(); ?></td>
    </tr>
    <tr>
        <td><?php echo $artixLinux->getNamaDistribusi(); ?></td>
        <td><?php echo $artixLinux->getInitSystem(); ?></td>
        <td><?php echo $artixLinux->getTahunRilis(); ?></td>
        <td><?php echo $artixLinux->getManajerPaket(); ?></td>
        <td><?php echo $artixLinux->getBasisSistem(); ?></td>
        <td><?php echo $artixLinux->getGayaRilis(); ?></td>
        <td><?php echo $artixLinux->getNamaKreator(); ?></td>
    </tr>
    <tr>
        <td><?php echo $chrunchBangPlusPlus->getNamaDistribusi(); ?></td>
        <td><?php echo $chrunchBangPlusPlus->getInitSystem(); ?></td>
        <td><?php echo $chrunchBangPlusPlus->getTahunRilis(); ?></td>
        <td><?php echo $chrunchBangPlusPlus->getManajerPaket(); ?></td>
        <td><?php echo $chrunchBangPlusPlus->getBasisSistem(); ?></td>
        <td><?php echo $chrunchBangPlusPlus->getGayaRilis(); ?></td>
        <td><?php echo $chrunchBangPlusPlus->getNamaKreator(); ?></td>
    </tr>
    <tr>
        <td><?php echo $devuan->getNamaDistribusi(); ?></td>
        <td><?php echo $devuan->getInitSystem(); ?></td>
        <td><?php echo $devuan->getTahunRilis(); ?></td>
        <td><?php echo $devuan->getManajerPaket(); ?></td>
        <td><?php echo $devuan->getBasisSistem(); ?></td>
        <td><?php echo $devuan->getGayaRilis(); ?></td>
        <td><?php echo $devuan->getNamaKreator(); ?></td>
    </tr>
    <tr>
        <td><?php echo $fedoraLinux->getNamaDistribusi(); ?></td>
        <td><?php echo $fedoraLinux->getInitSystem(); ?></td>
        <td><?php echo $fedoraLinux->getTahunRilis(); ?></td>
        <td><?php echo $fedoraLinux->getManajerPaket(); ?></td>
        <td><?php echo $fedoraLinux->getBasisSistem(); ?></td>
        <td><?php echo $fedoraLinux->getGayaRilis(); ?></td>
        <td><?php echo $fedoraLinux->getNamaKreator(); ?></td>
    </tr>
</table>

</body>
</html>