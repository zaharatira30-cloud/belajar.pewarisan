<?php
//parent class

class hewan 
{
    private $namahewan;
    private $jenis;
    //methon setter
    public function setinformasihewan($nama, $jenis) 
    {
        $this->namahewan = $nama;
        $this->jenis = $jenis;
    }
    //method getter
    public function getinformasihewan() 
    {
        return $this->namahewan .''. $this->jenis . '</br>';

    }
 
}
// child class
class keturunanhewanpertama extends hewan {}
class keturunanhewankedua extends hewan {}
class keturunanhewanketiga extends hewan {}

$hewan = new keturunanhewanpertama;
$hewan->setinformasihewan('harimau', 'karnivora');

$hewan2 = new keturunanhewankedua;
$hewan2->setinformasihewan('kambing ', 'herbivora');

$hewan3 = new keturunanhewanketiga;
$hewan3->setinformasihewan('singa', 'karnivora');

echo $hewan->getinformasihewan();
echo $hewan2->getinformasihewan();
echo $hewan3->getinformasihewan();