<?php

declare(strict_types=1);



class Categoria
{

    
    private string $nome;

   
    private int $codCateg;

    
    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->codCateg = 0;
    }

    
    public function setNome(string $nome)
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
