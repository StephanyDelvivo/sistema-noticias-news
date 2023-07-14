<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('SISTEMA', 'sistema-noticias-news');
define('PATH', ROOT . DS . SISTEMA . DS);

require_once 'Jornalista.php';
require_once 'Noticia.php';
require_once 'Assinante.php';
require_once 'Categoria.php';
require_once 'Comentario.php';

class Sistema
{
    private $noticias = [];
    private $admin = [];
    private $jornalistas = [];
    private $assinantes = [];
    private $categorias = [];
    private $comentarios = [];

    function __construct()
    {
        if (file_exists(PATH . 'sistema.save')) {
        $dados = file_get_contents(PATH.'sistema.save');
        $sistema = unserialize($dados);
        $this->noticias = $sistema->noticias;
        $this->jornalistas = $sistema->jornalistas;
        $this->assinantes = $sistema->assinantes;
        $this->categorias = $sistema->categorias;
        $this->comentarios = $sistema->comentarios;
        }
    }

    function __destruct()
    {
        $serializado = serialize($this);
        file_put_contents(PATH . 'sistema.save', $serializado);
    }

    function getJorn()
    {
        return $this->jornalistas;
    }

    function cadastrarJorn($jornalista)
    {
        $aux = $this->buscarJorn($jornalista->getCpf());
        if($aux == null){
            $this->jornalistas[] = $jornalista;
        }
    }

    function aprovarJorn($jornalista)
    {
            $jornalista->setStatusJorn('Aprovado');
    }

    function ReprovarJorn($jornalista){
        $jornalista->setStatusJorn('Reprovado');
    }

    function deletarJorn($cpf)
    {
        $remover = null;
        foreach ($this->jornalistas as $ind => $jornalista) {
            if ($jornalista->getCpf() == $cpf) {
                $remover = $ind;
            }
        }
        var_dump($remover);
        if ($remover !== null) {
            unset($this->jornalistas[$remover]);
        }

    }

    function buscarJorn($cpf)
    {
        foreach ($this->jornalistas as $jornalista) {
            if ($jornalista->getCpf() == $cpf) {
                return $jornalista;
            }
        }
        return null;  
    }

    
    function getNotic()
    {
        return $this->noticias;
    }

    function cadastrarNotic($noticia)
    {
        $this->noticias[] = $noticia;
        end($this->noticias);
        $noticia->setCodNoticia(key($this->noticias));
    }

    function aprovarNotic($noticia)
    {
            $noticia->setStatusNotic('Aprovada');
    }

    function deletarNotic($codNoticia)
    {
        $remover = null;
        foreach ($this->noticias as $ind => $noticia) {
            if ($noticia->getCodNoticia() == $codNoticia) {
                $remover = $ind;
            }
        }
        var_dump($remover);
        if ($remover !== null) {
            unset($this->noticias[$remover]);
        }
    }

    function reprovarNotic($noticia)
    {
        $noticia->setStatusNotic('Reprovada');
    }

    function buscarNotic($codNoticia) 
    {
        foreach ($this->noticias as $noticia) {
            if ($noticia->getCodNoticia() == $codNoticia) {
                return $noticia;
            }
        }
        return null; 
    }

    
    function getAss()
    {
        return $this->assinantes;
    }

    function cadastrarAss($assinante)
    {
        $aux = $this->buscarAss($assinante->getCpf());
        if($aux == null){
            $this->assinantes[] = $assinante;
        }
    }

    function aprovarAss($assinante)
    {
        $assinante->setStatusAss('Aprovado');
    }

    function reprovarAss($assinante)
    {
        $assinante->setStatusAss('Reprovado');
    }

    function deletarAss($cpf)
    {
        $remover = null;
        foreach ($this->assinantes as $ind => $assinante) {
            if ($assinante->getCpf() == $cpf) {
                $remover = $ind;
            }
        }
        var_dump($remover);
        if ($remover !== null) {
            unset($this->assinantes[$remover]);
        }
    }

    function buscarAss($cpf)
    {
        foreach ($this->assinantes as $assinante) {
            if ($assinante->getCpf() == $cpf) {
                return $assinante;
            }
        }
        return null; 
    }


    function getCat()
    {
        return $this->categorias;
    }

    function cadastrarCat($categoria)
    {
        $this->categorias[] = $categoria;
        end($this->categorias);
        $categoria->setCodCateg(key($this->categorias));

    }

    function deletarCat($codCateg)
    {
        $remover = null;
        foreach ($this->categorias as $ind => $categoria) {
            if ($categoria->getCodCateg() == $codCateg) {
                $remover = $ind;
            }
        }
        var_dump($remover);
        if ($remover !== null) {
            unset($this->categorias[$remover]);
        }
    }

    function buscarCat ($codCateg)
    {
        
        foreach ($this->categorias as $categoria) {
            if ($categoria->getCodCateg() == $codCateg) {
                return $categoria;
            }
        }
        return null; 
    }

    function buscarNoticiasPorCat($codCateg){
        $noticiasCategorizadas = [];
        foreach($this->noticias as $noticia){
            $categoria = $noticia->getCategoria();
            if(isset($categoria)){
                if($categoria->getCodCateg() == $codCateg){
                    $noticiasCategorizadas[] = $noticia;
                }
            }
        }
        return array_reverse($noticiasCategorizadas);
    }

    function getComent()
    {
        return $this->comentarios;
    }

    function cadastrarComent($comentario)
    {
        $this->comentarios[] = $comentario;
        end($this->comentarios);
        $comentario->setCodComent(key($this->comentarios));
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

}




    