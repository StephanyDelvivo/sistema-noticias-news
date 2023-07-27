<?php
class Comentario
{   
    private $autor; 
    private $textoComent;  
    private $codComent;
 
    function __construct($textoComent)
    {
        $this->textoComent = $textoComent;
        $this->autor = null;
        $this->codComent = '';
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
