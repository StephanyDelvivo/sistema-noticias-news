<?php
    require_once '../classes/Sistema.php';
    $sistema = new Sistema();
    session_start();
    $dropdown;
    $usuarioLogado;
        if(isset($_SESSION['cpf'])){
            if($_SESSION['tipo']==='ass'){
                $usuarioLogado = $sistema->buscarAss($_SESSION['cpf']);
                $dropdown = '<div class="drop-menu">'.
                    '<h2><a  href="#" class="drop-bt">'.$usuarioLogado->getNome().'</a></h2>'.
                    '<div class="drop-links">'.
                        '<a href="./formAlterarAssinante.php?cpf='.$usuarioLogado->getCpf().'">Alterar dados</a>'.
                        '<a href="./formLogout.php">SAIR</a>'.
                    '</div>'.      
                    '</div>';
            } else {
                if($_SESSION['tipo']==='jor'){
                    $usuarioLogado = $sistema->buscarJorn($_SESSION['cpf']);
                    $dropdown = '<div class="drop-menu">'.
                        '<h2><a  href="#" class="drop-bt">'.$usuarioLogado->getNome().'</a></h2>'.
                        '<div class="drop-links">'.
                            '<a href="./pagJornalista.php">Minhas notícias</a>'.
                            '<a href="./formAlterarJorn.php?cpf='.$usuarioLogado->getCpf().'">Alterar dados</a>'.
                            '<a href="./formLogout.php">SAIR</a>'.
                        '</div>'.      
                        '</div>';
                } else {
                    if($_SESSION['tipo']==='adm'){
                        $usuarioLogado = $sistema->buscarAdmin($_SESSION['cpf']);
                        $dropdown = '<div class="drop-menu">'.
                            '<h2><a  href="#" class="drop-bt">'.$usuarioLogado->getNome().'</a></h2>'.
                            '<div class="drop-links">'.
                                '<a href="./pagAdminJorn.php">Gerenciar Jornalistas</a>'.
                                '<a href="./pagAdminNoticia.php">Gerenciar Notícias</a>'.
                                '<a href="./pagAdminCateg.php">Gerenciar Categorias</a>'.
                                '<a href="./formAlterarAdmin.php?cpf='.$usuarioLogado->getCpf().'">Alterar dados</a>'.
                                '<a href="./formLogout.php">SAIR</a>'.
                            '</div>'.      
                            '</div>';
                    } else {
                        $dropdown = '<div class="link-menu"><a href="./formLogin.php">Entrar</a></div>';
                    }
                }
            }
        } else {
            $dropdown = '<div class="link-menu"><h2><a href="./formLogin.php">Entrar</a></h2></div>';
        }
?>
<header>
    <h2><a href="./index.php">Noticias News</a></h2>
    <nav>
        <?=$dropdown?>
    </nav>   
</header>