<?php

declare(strict_types=1);


/**
 * @author Stephany e os 4G
 */
class Sistema
{

    /** @var Noticia[] */
    private array $noticia;

    /** @var Administrador[] */
    private array $admin;

    /** @var Jornalista [*] */
    private Jornalista [*] $jornalista;

    /** @var Assinante [*] */
    private Assinante [*] $assinante;

    /** @var [object Object][] */
    private array $categoria;

    /** @var Comentario[] */
    private array $comentario;

    /**
     * 
     */
    public function __construct()
    {
        // TODO implement here
    }

    /**
     * @param [object Object] $jornalista
     */
    public function aprovarJorn([object Object] $jornalista)
    {
        // TODO implement here
    }

    /**
     * @param int $cpf
     */
    public function deletarJorn(int $cpf)
    {
        // TODO implement here
    }

    /**
     * @param int $cpf 
     * @return [object Object]
     */
    public function buscarJorn(int $cpf): [object Object]
    {
        // TODO implement here
        return null;
    }

    /**
     * @param [object Object] $noticia
     */
    public function aprovarNotic([object Object] $noticia)
    {
        // TODO implement here
    }

    /**
     * @param int $codNoticia
     */
    public function deletarNotic(int $codNoticia)
    {
        // TODO implement here
    }

    /**
     * @param int $codNoticia 
     * @return [object Object]
     */
    public function buscarNotic(int $codNoticia): [object Object]
    {
        // TODO implement here
        return null;
    }

    /**
     * @param [object Object] $assinante
     */
    public function aprovarAss([object Object] $assinante)
    {
        // TODO implement here
    }

    /**
     * @param int $cpf
     */
    public function deletarAss(int $cpf)
    {
        // TODO implement here
    }

    /**
     * @param int $cpf 
     * @return [object Object]
     */
    public function buscarAss(int $cpf): [object Object]
    {
        // TODO implement here
        return null;
    }

    /**
     * @param [object Object] $categoria
     */
    public function cadastrarCat([object Object] $categoria)
    {
        // TODO implement here
    }

    /**
     * @param int $codCateg
     */
    public function deletarCat(int $codCateg)
    {
        // TODO implement here
    }

    /**
     * @param int $codCateg 
     * @return [object Object]
     */
    public function buscarCat(int $codCateg): [object Object]
    {
        // TODO implement here
        return null;
    }

    /**
     * @param [object Object] $comentario
     */
    public function cadastrarComent([object Object] $comentario)
    {
        // TODO implement here
    }

    /**
     * @param int $codComent
     */
    public function deletarComent(int $codComent)
    {
        // TODO implement here
    }

    /**
     * @param int $codComent 
     * @return [object Object]
     */
    public function buscarComent(int $codComent): [object Object]
    {
        // TODO implement here
        return null;
    }

}
