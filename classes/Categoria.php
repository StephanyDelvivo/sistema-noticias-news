<?php

class Categoria
{ 
    private $nome; 
    private $codCateg;

    public function __construct($nome)
    {
        $this->nome = $nome;
        $this->codCateg = 0;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setcodCateg($codCateg)
    {
        $this->codCateg = $codCateg;
    }

    public function getcodCateg()
    {
        return $this->codCateg;
    }

}
