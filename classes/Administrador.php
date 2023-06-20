<?php

class Administrador
{

    private $nome;
    private $email;
    private int $senha;

    /**
     * @param string $nome 
     * @param string $email 
     * @param int $senha
     */
    public function __construct(string $nome, string $email, int $senha)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param int $senha
     */
    public function setSenha(int $senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return int
     */
    public function getSenha(): int
    {
        return $this->senha;
    }

}
