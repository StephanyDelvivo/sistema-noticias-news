<?php

class Sistema{

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
        file_put_contents(PATH . 'banco.save', $serializado);
    }


    function aprovarJorn($jornalista){
        // TIRAR DÚVIDA COM O GRUPO E O PROFESSOR
    }

    public function deletarJorn($cpf)
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

    public function buscarJorn($cpf)
    {
        foreach ($this->jornalistas as $jornalista) {
            if ($jornalista->getCpf() == $cpf) {
                return $jornalista;
            }
        }
        return null;  
    }



    public function aprovarNotic ($noticia)
    {
        // TIRAR DÚVIDA COM O GRUPO
    }


    public function deletarNotic($codNoticia)
    {
        $remover = null;
        foreach ($this->noticias as $ind => $noticia) {
            if ($noticia->getCpf() == $cpf) {
                $remover = $ind;
            }
        }
        var_dump($remover);
        if ($remover !== null) {
            unset($this->noticia[$remover]);
        }
    }


    public function buscarNotic($codNoticia) 
    {
        foreach ($this->codNoticia as $codNoticia) {
            if ($codNoticia->getCpf() == $cpf) {
                return $codNoticia;
            }
        }
        return null; 
    }


    public function aprovarAss ($assinante)
    {
        // TIRAR DÚVIDA COM O GRUPO
    }


    public function deletarAss($cpf)
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


    public function buscarAss($cpf)
    {
        foreach ($this->assinantes as $assinante) {
            if ($assinante->getCpf() == $cpf) {
                return $assinante;
            }
        }
        return null; 
    }


    public function cadastrarCat($categoria)
    {
        $aux = $this->buscarCat($categoria->getCateg());
        if ($aux == null) {
            $this->categorias[] = $categoria;
        }
    }


    public function deletarCat($codCateg)
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


    public function buscarCat ($codCateg)
    {
        
        foreach ($this->categorias as $categoria) {
            if ($categoria->getCpf() == $cpf) {
                return $categoria;
            }
        }
        return null; 
    }


    public function cadastrarComent($comentario)
    {
        $aux = $this->buscarComent($comentario->getCpf());
        if ($aux == null) {
            $this->comentarios[] = $comentario;
        }
    }


    public function deletarComent($codComent)
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


    public function buscarComent($codComent)
    {
        foreach ($this->comentarios as $comentario) {
            if ($comentario->getCodComent() == $codComent) {
                return $jornalista;
            }
        }
        return null; 
    }

}




    