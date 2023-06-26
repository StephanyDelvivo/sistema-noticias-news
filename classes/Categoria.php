<?php

class Categoria
{ 
    private $nome; 
    private $codCateg;

    function __construct($nome)
    {
        $this->nome = $nome;
        $this->codCateg = 0;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getNome()
    {
        return $this->nome;
    }

    function setcodCateg($codCateg)
    {
        $this->codCateg = $codCateg;
    }

    function getcodCateg()
    {
        return $this->codCateg;
    }

}
