<?php

class Production {
    public $titolo;
    public $lingua;
    public $voto;


public function __construct($titolo, $lingua, $voto) {
    $this->titolo = $titolo;
    $this->lingua = $lingua;
    $this->voto = $voto;
}

public function descrizione() {
    return "Titolo: $this->titolo, Lingua: $this->lingua, Voto: $this->voto/10";
}
}

$production1 = new Production("Poor things", "Italiano", 7);
$production2 = new Production("Ultimo tango a Parigi", "Inglese", 8);


echo "Produzione 1: " . $production1->descrizione() . "<br>";
echo "Produzione 2: " . $production2->descrizione() . "<br>";
?>