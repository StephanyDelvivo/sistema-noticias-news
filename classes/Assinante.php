<?php

declare(strict_types=1);


/**
 * @author Stephany e os 4G
 */
class Assinante
{

    /** @var string */
    private string $nome;

    /** @var string */
    private string $email;

    /** @var int */
    private int $senha;

    /** @var int */
    private int $cpf;

    /** @var int */
    private int $numCartao;

    /**
     * @param string $nome 
     * @param string $email 
     * @param int $senha 
     * @param int $cpf 
     * @param int $numCartao
     */
    public function __construct(string $nome, string $email, int $senha, int $cpf, int $numCartao)
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

    /**
     * @param int $cpf
     */
    public function setCpf(int $cpf)
    {
        // TODO implement here
    }

    /**
     * @return int
     */
    public function getCpf(): int
    {
        // TODO implement here
        return 0;
    }

    /**
     * @param int $numCartao
     */
    public function setNumCartao(int $numCartao)
    {
        // TODO implement here
    }

    /**
     * @return int
     */
    public function getNumCartao(): int
    {
        // TODO implement here
        return 0;
    }

}
