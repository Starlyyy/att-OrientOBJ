<?php 

require_once('Mago.php');

class Combatente extends Mago{
    private int $forcaDeAtaque;

    public function lancarPoder(){
        $dados = "O mago " . $this->getNome();
        $dados .= " do tipo combatente, possui força de " . $this->forcaDeAtaque;
        $dados .= " e lançou o poder " . $this->getPoder()->getDescricao();
        $dados .= " com força total de " . $this->getPoder()->getForcaTotal($this->getForcaDeAtaque()) . "\n\n"; 

        return $dados;
    }

    public function getForcaDeAtaque(): int
    {
        return $this->forcaDeAtaque;
    }

    public function setForcaDeAtaque(int $forcaDeAtaque): self
    {
        $this->forcaDeAtaque = $forcaDeAtaque;

        return $this;
    }
}
