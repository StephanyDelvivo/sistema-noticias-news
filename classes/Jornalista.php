<?php

declare(strict_types=1);


/**
 * @author Stephany e os 4G
 */
class Jornalista
{

    /** @var string */
    private string $nome;

    /** @var string */
    private string $email;

    /** @var int */
    private int $senha;

    /** @var int */
    private int $cpf;

    /** @var string */
    private string $historico;

    /** @var [object Object][] */
    private array $noticias;

    /** @var string */
    private string $statusJorn;

    /**
     * @param string $nome 
     * @param string $email 
     * @param int $senha 
     * @param int $cpf 
     * @param string $historico 
     * @param string $statusJorn
     */
    public function __construct(string $nome, string $email, int $senha, int $cpf, string $historico, string $statusJorn)
    {
        // TODO implement here
    }

    /**
     * @param [object Object] $noticia
     */
    public function enviarNoticia([object Object] $noticia)
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
     * @param string $statusJorn
     */
    public function setStatusJorn(string $statusJorn)
    {
        // TODO implement here
    }

    /**
     * @return string
     */
    public function getStatusJorn(): string
    {
        // TODO implement here
        return "";
    }

    /**
     * @param string $historico
     */
    public function setHistorico(string $historico)
    {
        // TODO implement here
    }

    /**
     * @return string
     */
    public function getHistorico(): string
    {
        // TODO implement here
        return "";
    }

    /**
     * @param string $qualificacao
     */
    public function setQualificacao(string $qualificacao)
    {
        // TODO implement here
    }

    /**
     * @return string
     */
    public function getQualificacao(): string
    {
        // TODO implement here
        return "";
    }

}
