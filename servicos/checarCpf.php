<?php
    require_once '../classes/Sistema.php';

    function checarCpf($cpf)
    {
        $sistema = new Sistema();
        $usuario = $sistema->buscarAss($cpf);
        if(!isset($usuario)){
            $usuario = $sistema->buscarJorn($cpf);
            if(!isset($usuario)){
                $usuario = $sistema->buscarAdmin($cpf);
            }
        }
        if(isset($usuario)){
            return TRUE;
        } else {
            return FALSE;
        }
    }  
?>