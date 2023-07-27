<?php
class Administrador
{
    private $nome;
    private $cpf;
    private $email;
    private $senha;

    function __construct($nome, $cpf, $email, $senha)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;
    }
    
    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getNome()
    {
        return $this->nome;
    }

    function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    function getCpf()
    {
        return $this->cpf;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }
  
    function getEmail()
    {
        return $this->email;
    }
  
    function setSenha($senha)
    {
        $this->senha = $senha;
    }
  
    function getSenha()
    {
        return $this->senha;
    }
}
