<?php
    session_start();
    /** para testes sem precisar de login*/
    //$_SESSION = []; //apagar dados da sessao
    //$_SESSION['usuario'] = 'Joao'; //nome
    //$_SESSION['tipo'] = 'ass'; //'ass'inante; 'jor'nalista; 'adm'in;
    $dropdown;
    $usuarioLogado;
    #function setLoginMenu(){
        #var_dump($usuarioLogado);
        if(isset($_SESSION['cpf'])){
            if($_SESSION['tipo']==='ass'){
                $usuarioLogado = $sistema->buscarAss($_SESSION['cpf']);
                $dropdown = '<div class="drop-menu">'.
                    '<a  href="#" class="drop-bt">'.$usuarioLogado->getNome().'</a>'.
                    '<div class="drop-links">'.
                        '<a href="./telas/formAlterarAssinante.php?cpf='.$usuarioLogado->getCpf().'">Alterar dados</a>'.
                        '<a href="./telas/formLogout.php">SAIR</a>'.
                    '</div>'.      
                    '</div>';
            } else {
                if($_SESSION['tipo']==='jor'){
                    $usuarioLogado = $sistema->buscarJorn($_SESSION['cpf']);
                    $dropdown = '<div class="drop-menu">'.
                        '<a  href="#" class="drop-bt">'.$usuarioLogado->getNome().'</a>'.
                        '<div class="drop-links">'.
                            '<a href="#">Minhas notícias</a>'.
                            '<a href="./telas/formAlterarJorn.php?cpf='.$usuarioLogado->getCpf().'">Alterar dados</a>'.
                            '<a href="./telas/formLogout.php">SAIR</a>'.
                        '</div>'.      
                        '</div>';
                } else {
                    if($_SESSION['tipo']==='adm'){
                        //$usuarioLogado = $sistema->buscarAdmin($_SESSION['cpf']);
                        $dropdown = '<div class="drop-menu">'.
                            '<a  href="#" class="drop-bt">'.$usuarioLogado->getNome().'</a>'.
                            '<div class="drop-links">'.
                                '<a href="#">Controle usuários</a>'.
                                '<a href="#">Controle jornalistas</a>'.
                                '<a href="#">Controle notícias</a>'.
                                '<a href="#">Alterar dados</a>'.
                                '<a href="./telas/formLogout.php">SAIR</a>'.
                            '</div>'.      
                            '</div>';
                    } else {
                        $dropdown = '<div class="link-menu"><a href="./telas/formLogin.php">ENTRAR</a></div>';
                    }
                }
            }
        } else {
            $dropdown = '<div class="link-menu"><a href="./telas/formLogin.php">ENTRAR</a></div>';
                /*'<div class="drop-menu">'.
                    '<a  href="#" class="drop-bt">Login</a>'.
                    '<div class="drop-links">'.
                        '<a href="#">Assinante</a>'.
                        '<a href="#">Jornalista</a>'.
                        '<a href="#">Administrador</a>'.
                    '</div>'.      
                    '</div>';*/
        }
    #}
?>
<header>
    <h1>Noticias News</h1>
    <nav>
        <div class="link-menu"><a href="./index.php">Home</a></div>
        <div class="link-menu"><a href="#">Sobre</a></div>
        <div class="link-menu"><a href="#">Contato</a></div>
        <?=$dropdown?>
    </nav>
</header>