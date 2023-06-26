<?php

class Comentario
{   
    private Assinante $autor; 
    private string $textoComent;  
    private int $codComent;
 
    function __construct($textoComent)
    {
        $this->textoComent = $textoComent;
        $this->autor = null;
        $this->codComent = 0;
    }

    function setAutor($autor)
    {
        $this->autor = $autor;
    }

    function getAutor()
    {
        return $this->autor;
    }

    function setTextoComent($textoComent)
    {
        $this->textoComent = $textoComent;
    }

    function getTextoComent()
    {
        return $this->textoComent;
    }

    function setCodComent($codComent)
    {
        $this->codComent = $codComent;
    }

    function getCodComent()
    {
        return $this->codComent;
    }

}
