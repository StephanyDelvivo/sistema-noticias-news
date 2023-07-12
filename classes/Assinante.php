<?php
class Assinante
{
    private $nome;
    private $email;
    private $senha;
    private $cpf;
    private $numCartao;
    private $statusAss;

    function __construct($nome, $cpf, $email, $senha, $numCartao)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->cpf = $cpf;
        $this->numCartao = $numCartao;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getNome() 
    {
        return $this->nome;
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

    function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    function getCpf()
    {
        return $this->cpf;
    }

    function setNumCartao($numCartao)
    {
        $this->numCartao = $numCartao;
    }

    function getNumCartao()
    {
        return $this->numCartao;
    }

    function setStatusAss($statusAss)
    {
        $this->statusAss = $statusAss;
    }

    function getStatusAss($statusAss)
    {
        return $this->$statusAss;
    }

}
