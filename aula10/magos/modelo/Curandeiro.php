<?php 

require_once('Mago.php');

class Curandeiro extends Mago{
    private int $forcaDeCura;

    public function lancarPoder(){
        $dados = "O mago " . $this->getNome();
        $dados .= " do tipo curandeiro, possui força de " . $this->forcaDeCura;
        $dados .= " e lançou o poder " . $this->getPoder()->getDescricao();
        $dados .= " com força total de " . $this->getPoder()->getForcaTotal($this->getForcaDeCura()) . "\n\n"; 

        return $dados;
    }

    
    public function getForcaDeCura(): int
    {
        return $this->forcaDeCura;
    }

    public function setForcaDeCura(int $forcaDeCura): self
    {
        $this->forcaDeCura = $forcaDeCura;

        return $this;
    }
}
