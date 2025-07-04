<?php

abstract class Sekil
{
    public $birincikenar;
    public $ikincikenar;

    public function __construct($birincikenar, $ikincikenar)
    {
        $this->birincikenar = $birincikenar;
        $this->ikincikenar = $ikincikenar;
    }

    abstract public function alan();
    abstract public function cevre();
}

class Dikdortgen extends Sekil
{
    public function alan()
    {
        return $this->birincikenar * $this->ikincikenar;
    }
    public function cevre()
    {
        return ($this->birincikenar + $this->ikincikenar) * 2;
    }
}

class Ucgen extends Sekil
{
    public $ucuncukenar;

    public function __construct($birincikenar, $ikincikenar, $ucuncukenar)
    {
        $this->birincikenar = $birincikenar;
        $this->ikincikenar = $ikincikenar;
        $this->ucuncukenar = $ucuncukenar;
    }

    public function alan()
    {
        // Heron formülü
        $s = $this->cevre() / 2;
        return sqrt($s * ($s - $this->birincikenar) * ($s - $this->ikincikenar) * ($s - $this->ucuncukenar));
    }
    public function cevre()
    {
        return $this->birincikenar + $this->ikincikenar + $this->ucuncukenar;
    }
}

class Kare extends Sekil
{
    public function __construct($kenar)
    {
        parent::__construct($kenar, $kenar);
    }

    public function alan()
    {
        return $this->birincikenar ** 2;
    }
    public function cevre()
    {
        return ($this->birincikenar) * 4;
    }
}

$kare = new Kare(6);
echo "Kare Alan: " . $kare->alan() . "<br>";
echo "Kare Çevre: " . $kare->cevre() . "<br>";

$dikdorgen = new Dikdortgen(4, 6);
echo "Dikdörtgen Alan: " . $dikdorgen->alan() . "<br>";
echo "Dikdörtgen Çevre: " . $dikdorgen->cevre() . "<br>";

$ucgen = new Ucgen(6, 9, 12);
echo "Üçgen Alan: " . $ucgen->alan() . "<br>";
echo "Üçgen Çevre: " . $ucgen->cevre() . "<br>";
