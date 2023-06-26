<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('SISTEMA', 'sistema-noticias-news');
define('PATH', ROOT . DS . SISTEMA . DS);

class Sistema
{
    public $noticias = [];
    public $admin = [];
    public $jornalistas = [];
    public $assinantes = [];
    public $categorias = [];
    public $comentarios = [];

    function __construct()
    {
        if (file_exists(PATH . 'sistema.save')) {
        $dados = file_get_contents(PATH.'sistema.save');
        $sistema = unserialize($dados);
        }
    }

    function __destruct()
    {
        $serializado = serialize($this);
        file_put_contents(PATH . 'sistema.save', $serializado);
    }

    function aprovarJorn($jornalista){
        // TIRAR DÚVIDA COM O GRUPO E O PROFESSOR
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

    function aprovarNotic ($noticia)
    {
        // TIRAR DÚVIDA COM O GRUPO
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

    function buscarNotic($codNoticia) 
    {
        foreach ($this->noticias as $noticia) {
            if ($noticia->getCodNoticia() == $codNoticia) {
                return $noticia;
            }
        }
        return null; 
    }

    function aprovarAss ($assinante)
    {
        // TIRAR DÚVIDA COM O GRUPO
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

    function cadastrarCat($categoria)
    {
        $aux = $this->buscarCat($categoria->getCateg());
        if ($aux == null) {
            $this->categorias[] = $categoria;
        }
    }

    function deletarCat($codCateg)
    {
        $remover = null;
        foreach ($this->categorias as $ind => $categoria) {
            if ($categoria->getCateg() == $codCateg) {
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

    function cadastrarComent($comentario)
    {
        $aux = $this->buscarComent($comentario->getCodComent());
        if ($aux == null) {
            $this->comentarios[] = $comentario;
        }
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




    