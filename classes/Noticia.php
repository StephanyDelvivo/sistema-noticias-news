<?php

declare(strict_types=1);


class Noticia
{

   
    private  $codNoticia;

   
    private  $titulo;

    
    private  $corpoTexto;

    
    private  $imgNoticia;

    
    private  $categorias;

    
    private  $comentarios;

   
    private  $status;

   
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
        
    }

    
    public function setTitulo($titulo)
    { 
        $this->titulo = $titulo;
        
    }

   
    public function getTitulo()
    {
        
        return $this->titulo;
    }

   
    public function setCorpoTexto($corpoTexto)
    {
        $this->corpoTexto = $corpoTexto;
       
    }

    
    public function getCorpoTexto()
    {
        
        return $this->corpoTexto;
    }

    
    public function setImgNoticia($imgNoticia)
    {
        $this->imgNoticia = $imgNoticia;
        
    }

    
    public function getImgNoticia()
    {
        
        return $this->imgNoticia;
    }

   
    public function setStatus($status)
    {
        $this->status = $status;
        
    }

    
    public function getStatus()
    {
        
        return $this->status;
    }

    
    public function setContAcesso($contAcesso)
    {
        $this->contAcesso = $contAcesso;
        
    }

    
    public function getContAcesso()
    {
       
        return $this->contAcesso;
    }

    
    public function comentar($textoComent)
    {
        $this->comentarios[] = $textoComent;
        
    }

    public function getComentarios()
    {
        
        return $this->comentarios;
    }

}
