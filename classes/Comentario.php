<?php

declare(strict_types=1);



class Comentario
{

    
    private Assinante $autor;

    
    private string $textoComent;

    
    private int $codComent;

    
    public function __construct($textoComent)
    {
        $this->textoComent = $textoComent;
        $this->autor = null;
        $this->codComent = 0;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getAutor()
    {
        return $this->autor;

    }

    public function setTextoComent($textoComent)
    {
        $this->textoComent = $textoComent;
    }

    
    public function getTextoComent()
    {
        return $this->textoComent;
    }

    public function setCodComent($codComent)
    {
        $this->codComent = $codComent;
    }

    public function getCodComent()
    {
        return $this->codComent;
    }

}
