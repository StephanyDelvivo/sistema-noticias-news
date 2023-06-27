<?php
class Assinante
{
    private $nome;

    private $email;

    private  $senha;

    private  $cpf;

    private  $numCartao;

    public function __construct( $nome,  $email,  $senha,  $cpf,  $numCartao)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->cpf = $cpf;
        $this->numCartao = $numCartao;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome() 
    {
        return $this->nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {

        return $this->email;
    }

  
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getSenha()
    {

        return $this->senha;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getCpf()
    {

        return $this->cpf;
    }

    public function setNumCartao($numCartao)
    {
        $this->setNumCartao = $numCartao
    }

    public function getNumCartao()
    {

        return $this->numCartao;
    }

}
