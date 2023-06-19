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
        // TODO implement here
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome)
    {
        // TODO implement here
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        // TODO implement here
        return "";
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        // TODO implement here
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        // TODO implement here
        return "";
    }

    /**
     * @param int $senha
     */
    public function setSenha(int $senha)
    {
        // TODO implement here
    }

    /**
     * @return int
     */
    public function getSenha(): int
    {
        // TODO implement here
        return 0;
    }

}
