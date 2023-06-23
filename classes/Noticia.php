<?php

class Noticia
{
    private $codNoticia;
    private $titulo;
    private $corpoTexto;
    private $imgNoticia;
    private $categorias;
    private $comentarios;
    private $status;
    private $contAcesso;
 
    public function __construct($titulo, $corpoTexto, $imgNoticia, $status)
    {
        $this->titulo = $titulo;
        $this->corpoTexto = $corpoTexto;
        $this->imgNoticia = $imgNoticia;
        $this->status = $status;
        $this->categorias = [];
        $this->comentarios = [];
        $this->contAcesso = 0;
        $this->codNoticia = 0;
        
    }

    function setTitulo($titulo)
    { 
        $this->titulo = $titulo; 
    }
  
    function getTitulo()
    { 
        return $this->titulo;
    }
   
    function setCorpoTexto($corpoTexto)
    {
        $this->corpoTexto = $corpoTexto;
    }

    function getCorpoTexto()
    {  
        return $this->corpoTexto;
    }
    
    function setImgNoticia($imgNoticia)
    {
        $this->imgNoticia = $imgNoticia;   
    }
 
    function getImgNoticia()
    {  
        return $this->imgNoticia;
    }

    function setStatus($status)
    {
        $this->status = $status; 
    }

    function getStatus()
    { 
        return $this->status;
    }

    function setContAcesso($contAcesso)
    {
        $this->contAcesso = $contAcesso; 
    }
  
    function getContAcesso()
    { 
        return $this->contAcesso;
    }

    function comentar($textoComent)
    {
        $this->comentarios[] = $textoComent; 
    }

    function getComentarios()
    {  
        return $this->comentarios;
    }

    function setCodNoticia($codNoticia) 
    {
        $this->codNoticia = $codNoticia;
    }

    function getCodNoticia()
    {
        return $this->codNoticia;
    }

    function categorizar($categoria)
    {
        $this->categorias[] = $categoria;
    }

    function getCategorias()
    {
        return $this->categorias;
    }

}
