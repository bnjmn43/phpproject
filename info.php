<?php
class Info {
  protected $infoName;
  protected $number;
  protected $brand;
  protected $material;
  protected $lining;
  protected $stretch;
  protected $seethrough;
  protected $size;
  
  public function __construct($infoName, $number, $brand, $material, $lining, $stretch, $seethrough, $size) {
    $this->infoName = $infoName;
    $this->number = $number;
    $this->brand = $brand;
    $this->material = $material;
    $this->lining = $lining;
    $this->stretch = $stretch;
    $this->seethrough = $seethrough;
    $this->size = $size;
  }
  
  public function getInfoName() {
    return $this->infoName;
  }
  
  public function getNumber() {
    return $this->number;
  }
  
  public function getBrand() {
    return $this->brand;
  }

  public function getMaterial() {
    return $this->material;
  }
  
  public function getLining() {
    return $this->lining;
  }
  
  public function getStretch() {
    return $this->stretch;
  }

  public function getSeethrough() {
    return $this->seethrough;
  }

  public function getSize() {
    return $this->size;
  }

  public static function findByInfoName($infos, $name) {
    foreach ($infos as $info) {
      if ($info->getInfoName() == $name) {
        return $info;
      }
    }
  }
}
?>