<?php

class Administrador
{
    private $nome;
    private $email;
    private int $senha;

    function __construct($nome, $email, $senha)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }
    
    function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    function getNome(): string
    {
        return $this->nome;
    }

    function setEmail(string $email)
    {
        $this->email = $email;
    }
  
    function getEmail(): string
    {
        return $this->email;
    }
  
    function setSenha(int $senha)
    {
        $this->senha = $senha;
    }
  
    function getSenha(): int
    {
        return $this->senha;
    }

}
