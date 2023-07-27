<?php
class Jornalista
{ 
    private $nome;
    private $cpf;
    private $email;
    private $senha;
    private $historico;
    private $noticias;
    private $statusJorn;

     function __construct($nome, $cpf, $email, $senha, $historico)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->cpf = $cpf;
        $this->historico = $historico;
        $this->noticias = [];
        $this->statusJorn = NULL;
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

    function setStatusJorn($statusJorn)
    {
        $this->statusJorn = $statusJorn;
    }

    function getStatusJorn()
    {       
        return $this->statusJorn;
    }

    function setHistorico($historico)
    {
        $this->historico = $historico;
    }

    function getHistorico()
    {    
        return $this->historico;
    }
}
