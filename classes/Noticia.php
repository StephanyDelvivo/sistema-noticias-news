<?php

declare(strict_types=1);


/**
 * @author Stephany e os 4G
 */
class Noticia
{

    /** @var int */
    private int $codNoticia;

    /** @var string */
    private string $titulo;

    /** @var string */
    private string $corpoTexto;

    /** @var string */
    private string $imgNoticia;

    /** @var [object Object][] */
    private array $categorias;

    /** @var [object Object][] */
    private array $comentarios;

    /** @var string */
    private string $status;

    /** @var int */
    private int $contAcesso;

    /**
     * @param string $titulo 
     * @param string $corpoTexto 
     * @param string $imgNoticia 
     * @param string $status
     */
    public function __construct(string $titulo, string $corpoTexto, string $imgNoticia, string $status)
    {
        // TODO implement here
    }

    /**
     * @param string $titulo
     */
    public function setTitulo(string $titulo)
    {
        // TODO implement here
    }

    /**
     * @return string
     */
    public function getTitulo(): string
    {
        // TODO implement here
        return "";
    }

    /**
     * @param string $corpoTexto
     */
    public function setCorpoTexto(string $corpoTexto)
    {
        // TODO implement here
    }

    /**
     * @return string
     */
    public function getCorpoTexto(): string
    {
        // TODO implement here
        return "";
    }

    /**
     * @param string $imgNoticia
     */
    public function setImgNoticia(string $imgNoticia)
    {
        // TODO implement here
    }

    /**
     * @return string
     */
    public function getImgNoticia(): string
    {
        // TODO implement here
        return "";
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        // TODO implement here
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        // TODO implement here
        return "";
    }

    /**
     * @param int $contAcesso
     */
    public function setContAcesso(int $contAcesso)
    {
        // TODO implement here
    }

    /**
     * @return int
     */
    public function getContAcesso(): int
    {
        // TODO implement here
        return 0;
    }

    /**
     * @param string $textoComent
     */
    public function comentar(string $textoComent)
    {
        // TODO implement here
    }

    /**
     * @return [object Object][]
     */
    public function getComentarios(): array
    {
        // TODO implement here
        return [];
    }

}
