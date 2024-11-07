<?php 

require_once('Espaco.php');

class PontoTuristico extends Espaco {
    protected int $duracaoVisita;

    public function getDadosPontoTuristico(){
        
    }    

    /**
     * Get the value of duracaoVisita
     */
    public function getDuracaoVisita(): int
    {
        return $this->duracaoVisita;
    }

    /**
     * Set the value of duracaoVisita
     */
    public function setDuracaoVisita(int $duracaoVisita): self
    {
        $this->duracaoVisita = $duracaoVisita;

        return $this;
    }
}
