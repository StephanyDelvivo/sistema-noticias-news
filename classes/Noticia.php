<?php

class Noticia
{
    private $codNoticia;
    private $titulo;
    private $corpoTexto;
    private $imgNoticia;
    private $categoria;
    private $comentarios;
    private $status;
    private $contAcesso;
    private $jornalista;
    private $premium;
 
    public function __construct($titulo, $corpoTexto, $imgNoticia)
    {
        $this->titulo = $titulo;
        $this->corpoTexto = $corpoTexto;
        $this->imgNoticia = $imgNoticia;
        $this->status = NULL;
        $this->categoria = NULL;
        $this->comentarios = [];
        $this->contAcesso = 0;
        $this->codNoticia = '';
        $this->jornalista = NULL;
        $this->premium = false;
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

    function setStatusNotic($status)
    {
        $this->status = $status; 
    }

    function getStatusNotic()
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

    function comentar($comentario)
    {
        $this->comentarios[] = $comentario;
        end($this->comentarios);
        $comentario->setCodComent(key($this->comentarios));
    }

    function getComentarios()
    {  
        return $this->comentarios;
    }

    function deletarComent($codComent)
    {
        $remover = null;
        foreach ($this->comentarios as $ind => $comentario) {
            if ($comentario->getCodComent() == $codComent) {
                $remover = $ind;
            }
        }
        var_dump($remover);
        if ($remover !== null) {
            unset($this->comentarios[$remover]);
        }
    }

    function buscarComent($codComent)
    {
        foreach ($this->comentarios as $comentario) {
            if ($comentario->getCodComent() == $codComent) {
                return $comentario;
            }
        }
        return null; 
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
        $this->categoria = $categoria;
    }

    function getCategoria()
    {
        return $this->categoria;
    }

    function setJorn($jornalista)
    {
        $this->jornalista = $jornalista;
    }

    function getJorn()
    {
        return $this->jornalista;
    }

    
    function setPremium($premium)
    {
        $this->premium = $premium; 
    }
  
    function getPremium()
    { 
        return $this->premium;
    }
}
