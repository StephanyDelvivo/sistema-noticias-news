<?php
    session_start();
    /** para testes sem precisar de login*/
    //$_SESSION = []; //apagar dados da sessao
    //$_SESSION['usuario'] = 'Joao'; //nome
    //$_SESSION['tipo'] = 'ass'; //'ass'inante; 'jor'nalista; 'adm'in;
    function setLoginMenu(){
        if(isset($_SESSION['usuario'])){
            if($_SESSION['tipo']==='ass'){
                return '<div class="drop-menu">'.
                    '<a  href="#" class="drop-bt">'.$_SESSION['usuario'].'</a>'.
                    '<div class="drop-links">'.
                        '<a href="#">Alterar dados</a>'.
                        '<a href="./telas/formLogout.php">SAIR</a>'.
                    '</div>'.      
                    '</div>';
            } else {
                if($_SESSION['tipo']==='jor'){
                    return '<div class="drop-menu">'.
                        '<a  href="#" class="drop-bt">'.$_SESSION['usuario'].'</a>'.
                        '<div class="drop-links">'.
                            '<a href="#">Minhas notícias</a>'.
                            '<a href="#">Alterar dados</a>'.
                            '<a href="./telas/formLogout.php">SAIR</a>'.
                        '</div>'.      
                        '</div>';
                } else {
                    if($_SESSION['tipo']==='adm'){
                        return '<div class="drop-menu">'.
                            '<a  href="#" class="drop-bt">'.$_SESSION['usuario'].'</a>'.
                            '<div class="drop-links">'.
                                '<a href="#">Controle usuários</a>'.
                                '<a href="#">Controle jornalistas</a>'.
                                '<a href="#">Controle notícias</a>'.
                                '<a href="#">Alterar dados</a>'.
                                '<a href="./telas/formLogout.php">SAIR</a>'.
                            '</div>'.      
                            '</div>';
                    } else {
                        return '<div class="link-menu"><a href="./telas/formLogin.php">ENTRAR</a></div>';
                    }
                }
            }
        } else {
            return '<div class="link-menu"><a href="./telas/formLogin.php">ENTRAR</a></div>';
                /*'<div class="drop-menu">'.
                    '<a  href="#" class="drop-bt">Login</a>'.
                    '<div class="drop-links">'.
                        '<a href="#">Assinante</a>'.
                        '<a href="#">Jornalista</a>'.
                        '<a href="#">Administrador</a>'.
                    '</div>'.      
                    '</div>';*/
        }
    }
?>
<header>
    <h1>Noticias News</h1>
    <nav>
        <div class="link-menu"><a href="#">Home</a></div>
        <div class="link-menu"><a href="#">Sobre</a></div>
        <div class="link-menu"><a href="#">Contato</a></div>
        <?=setLoginMenu()?>
    </nav>
</header>