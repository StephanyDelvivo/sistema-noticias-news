<?php 
    use PHPUnit\Framework\TestCase;

    require_once '../classes/Sistema.php';
    require_once '../classes/Noticia.php';
    require_once '../classes/Comentario.php';

    class NoticiaTest extends TestCase{
        function testDeveriaRetornarVetorComentariosAposCadastrar(){
            $textoComent = 'gostei da noticia';

            $sistema = new Sistema();
            $noticia = new Noticia('titulo da noticia', 'texto', 'imgNoticia');
            $sistema->cadastrarNotic($noticia);

            $comentario = new Comentario($textoComent);
            $noticia->comentar($comentario);

            $resultado = $noticia->getComentarios();
            $resultadoEsperado = 1;
            $this->assertCount($resultadoEsperado, $resultado);
        }

        function testDeveriaRetornarBuscaComentario(){
            $textoComent = 'gostei da noticia';

            $sistema = new Sistema();
            $noticia = new Noticia('titulo da noticia', 'texto', 'imgNoticia');
            $sistema->cadastrarNotic($noticia);

            $comentario = new Comentario($textoComent);
            $noticia->comentar($comentario);

            $resultado = $noticia->buscarComent(0);
            $resultadoEsperado = $comentario;
            $this->assertEquals($resultado, $resultadoEsperado);

        }

        function testDeveriaRetornarVetorComentariosAposDeletar(){
            $textoComent = 'gostei da noticia';

            $sistema = new Sistema();
            $noticia = new Noticia('titulo da noticia', 'texto', 'imgNoticia');
            $sistema->cadastrarNotic($noticia);

            $comentario = new Comentario($textoComent);
            $noticia->comentar($comentario);
            $noticia->deletarComent(0);

            $resultado = $noticia->getComentarios();
            $resultadoEsperado = 0;
            $this->assertCount($resultadoEsperado, $resultado);
        }
    }
?>