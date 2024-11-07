<?php 

require_once('Espaco.php');

class Hotel extends Espaco{
    protected int $numEstrelas;
    protected bool $cafeIncluso;

    public function getDadosHotel(){ //mudar para protectecd
        $dados = "HOTEL | ";
        $dados .= $this->getDadosEspaco();  
    }

    public function getNumEstrelas(): int
    {
        return $this->numEstrelas;
    }


    public function setNumEstrelas(int $numEstrelas): self
    {
        $this->numEstrelas = $numEstrelas;

        return $this;
    }


    public function isCafeIncluso(): bool
    {
        return $this->cafeIncluso;
    }

    public function setCafeIncluso(bool $cafeIncluso): self
    {
        $this->cafeIncluso = $cafeIncluso;

        return $this;
    }
}
