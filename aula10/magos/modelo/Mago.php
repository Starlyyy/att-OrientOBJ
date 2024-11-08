<?php 

require_once('Poder.php');

class Mago {
    protected string $nome;
    protected Poder $poder;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getPoder(): Poder
    {
        return $this->poder;
    }

    public function setPoder(Poder $poder): self
    {
        $this->poder = $poder;

        return $this;
    }
}
