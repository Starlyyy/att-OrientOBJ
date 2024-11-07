<?php 

require_once('Espaco.php');

class Hotel extends Espaco{
    protected int $numEstrelas;
    protected bool $cafeIncluso;

    public function getDadosHotel(){
        
    }

    /**
     * Get the value of numEstrelas
     */
    public function getNumEstrelas(): int
    {
        return $this->numEstrelas;
    }

    /**
     * Set the value of numEstrelas
     */
    public function setNumEstrelas(int $numEstrelas): self
    {
        $this->numEstrelas = $numEstrelas;

        return $this;
    }

    /**
     * Get the value of cafeIncluso
     */
    public function isCafeIncluso(): bool
    {
        return $this->cafeIncluso;
    }

    /**
     * Set the value of cafeIncluso
     */
    public function setCafeIncluso(bool $cafeIncluso): self
    {
        $this->cafeIncluso = $cafeIncluso;

        return $this;
    }
}
