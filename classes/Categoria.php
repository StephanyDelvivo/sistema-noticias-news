<?php
class Categoria
{ 
    private $nome; 
    private $codCateg;

    function __construct($nome)
    {
        $this->nome = $nome;
        $this->codCateg = '';
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getNome()
    {
        return $this->nome;
    }

    function setCodCateg($codCateg)
    {
        $this->codCateg = $codCateg;
    }

    function getCodCateg()
    {
        return $this->codCateg;
    }
}
