<?php

declare(strict_types=1);


/**
 * @author Stephany e os 4G
 */
class Comentario
{

    /** @var [object Object] */
    private Assinante $autor;

    /** @var string */
    private string $textoComent;

    /** @var int */
    private int $codComent;

    /**
     * @param string $textoComent
     */
    public function __construct(string $textoComent)
    {
        // TODO implement here
    }

    /**
     * @param string $textoComent
     */
    public function setTextoComent(string $textoComent)
    {
        // TODO implement here
    }

    /**
     * @return string
     */
    public function getTextoComent(): string
    {
        // TODO implement here
        return "";
    }

}
