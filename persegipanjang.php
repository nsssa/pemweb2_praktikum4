<!DOCTYPE html>
<h3>Rumus Persegi Panjang</h3>
<?php
class persegipanjang{
    public $panjang;
    public $lebar;

    public function luas(){
        $luas=$this->panjang*$this->lebar;
        return "Hasil Luas : ".$luas;
    }
    public function keliling(){
        $keliling=5*($this->panjang+$this->lebar);
        return "Hasil Keliling : ".$keliling;
    }

    public function setLebar($lebar){
        return $this->lebar=$lebar;
    }
    public function setPanjang($panjang){
        return $this->panjang=$panjang;
    }
}
$LuasPersegi=new persegipanjang();
echo "Panjangnya adalah : ".$LuasPersegi->setPanjang(40);
echo "<br>";
echo "Lebarnya adalah : ".$LuasPersegi->setLebar(40);
echo "<br>";
echo $LuasPersegi->luas();
echo "<br>";
echo $LuasPersegi->keliling();
?>