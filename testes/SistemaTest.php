<?php 
    use PHPUnit\Framework\TestCase;
    require_once '../classes/Sistema.php';
    require_once '../classes/Jornalista.php';

    class SistemaTest extends TestCase 
    {
        /////////jornalista//////////

        function testDeveriaCadastrarJorn()
        {
            $sistema = new Sistema();
            $jornalista = new Jornalista('Jose', '12345678901', 'jose@gmail.com', 'senha45', 'historicoLInk');
            $contagem = count($sistema->getJorn());
            $sistema->cadastrarJorn($jornalista);
            $resultadoEsperado = $contagem + 1;
            $resultado = count($sistema->getJorn());

            $this->assertCount($resultadoEsperado, $sistema->getJorn());
        }

        function testDeveriaCadastrarJornRepitido()
        {
            $sistema = new Sistema();
            $jornalista = new Jornalista('Jose', '12345678901', 'jose@gmail.com', 'senha45', 'historicoLInk');
            $sistema->cadastrarJorn($jornalista);
            $contagem = count($sistema->getJorn());
            $jornalista2 = new Jornalista('Jose', '12345678901', 'jose@gmail.com', 'senha45', 'historicoLInk');
            $sistema->cadastrarJorn($jornalista2);
            $resultadoEsperado = $contagem;
            $resultado = count($sistema->getJorn());

            $this->assertCount($resultadoEsperado, $sistema->getJorn());
        }
        
        function testDeveriaRetornarBuscaJorn()
        {
            $sistema = new Sistema();
            $jornalista = new Jornalista('Jose', '12345678901', 'jose@gmail.com', 'senha45', 'historicoLInk');
            $sistema->cadastrarJorn($jornalista);
            $sistema->aprovarJorn($jornalista);
            $resultadoEsperado = $jornalista;
            $resultado = $sistema->buscarJorn($jornalista->getCpf());

            $this->assertEquals($resultadoEsperado, $resultado);
        }

        function testDeveriaRetornarBuscaJornInexistente()
        {
            $sistema = new Sistema();
            $jornalista = new Jornalista('Jose', '12345678901', 'jose@gmail.com', 'senha45', 'historicoLInk');
            $sistema->cadastrarJorn($jornalista);
            $sistema->aprovarJorn($jornalista);
            $resultado = $sistema->buscarJorn('00000000000');

            $this->assertNull($resultado);
        }

        function testDeveriaDeletarJorn()
        {
            $sistema = new Sistema();
            $jornalista = new Jornalista('Jose', '12345678901', 'jose@gmail.com', 'senha45', 'historicoLInk');
            $sistema->cadastrarJorn($jornalista);
            $sistema->aprovarJorn($jornalista);
            $contagem = count($sistema->getJorn());
            $sistema->deletarJorn($jornalista->getCpf());
            $resultadoEsperado = $contagem - 1;
            $resultado = count($sistema->getJorn());

            $this->assertCount($resultadoEsperado, $sistema->getJorn());
        }

        function testDeveriaDeletarJornInexistente()
        {
            $sistema = new Sistema();
            $jornalista = new Jornalista('Jose', '12345678901', 'jose@gmail.com', 'senha45', 'historicoLInk');
            $sistema->cadastrarJorn($jornalista);
            $sistema->aprovarJorn($jornalista);
            $contagem = count($sistema->getJorn());
            $sistema->deletarJorn('00000000000');
            $resultadoEsperado = $contagem;
            $resultado = count($sistema->getJorn());

            $this->assertCount($resultadoEsperado, $sistema->getJorn());
        }

        /////////assinante////////

        function testDeveriaCadastrarAss()
        {
            $sistema = new Sistema();
            $assinante = new Assinante('Joao', '12345678900', 'joao@gmail.com', 'senha45', 'numCartao');
            $contagem = count($sistema->getAss());
            $sistema->cadastrarAss($assinante);
            $resultadoEsperado = $contagem + 1;
            $resultado = count($sistema->getAss());

            $this->assertCount($resultadoEsperado, $sistema->getAss());
        }

        function testDeveriaCadastrarAssRepitido()
        {
            $sistema = new Sistema();
            $assinante = new Assinante('Joao', '12345678900', 'joao@gmail.com', 'senha45', 'numCartao');
            $sistema->cadastrarAss($assinante);
            $contagem = count($sistema->getAss());
            $assinante2 = new Assinante('Joao', '12345678900', 'joao@gmail.com', 'senha45', 'numCartao');
            $sistema->cadastrarAss($assinante2);
            $resultadoEsperado = $contagem;
            $resultado = count($sistema->getAss());

            $this->assertCount($resultadoEsperado, $sistema->getAss());
        }
        
        function testDeveriaRetornarBuscaAss()
        {
            $sistema = new Sistema();
            $assinante = new Assinante('Joao', '12345678900', 'joao@gmail.com', 'senha45', 'numCartao');
            $sistema->cadastrarAss($assinante);
            $resultadoEsperado = $assinante;
            $resultado = $sistema->buscarAss($assinante->getCpf());

            $this->assertEquals($resultadoEsperado, $resultado);
        }

        function testDeveriaRetornarBuscaAssInexistente()
        {
            $sistema = new Sistema();
            $assinante = new Assinante('Joao', '12345678900', 'joao@gmail.com', 'senha45', 'numCartao');
            $sistema->cadastrarAss($assinante);
            $resultadoEsperado = NULL;
            $resultado = $sistema->buscarAss('00000000000');

            $this->assertNull($resultado);
        }

        function testDeveriaDeletarAss()
        {
            $sistema = new Sistema();
            $assinante = new Assinante('Joao', '12345678900', 'joao@gmail.com', 'senha45', 'numCartao');
            $sistema->cadastrarAss($assinante);
            $contagem = count($sistema->getAss());
            $sistema->deletarAss($assinante->getCpf());
            $resultadoEsperado = $contagem - 1;
            $resultado = count($sistema->getAss());

            $this->assertCount($resultadoEsperado, $sistema->getAss());
        }

        function testDeveriaDeletarAssInexistente()
        {
            $sistema = new Sistema();
            $assinante = new Assinante('Joao', '12345678900', 'joao@gmail.com', 'senha45', 'numCartao');
            $sistema->cadastrarAss($assinante);
            $contagem = count($sistema->getAss());
            $sistema->deletarAss('00000000000');
            $resultadoEsperado = $contagem;
            $resultado = count($sistema->getAss());

            $this->assertCount($resultadoEsperado, $sistema->getAss());
    }

    ////////////categorias///////////

    function testDeveriaCadastrarCat()
    {
        $sistema = new Sistema();
        $categoria = new Categoria('Esportes');
        $contagem = count($sistema->getCat());
        $sistema->cadastrarCat($categoria);
        $resultadoEsperado = $contagem + 1;
        $resultado = count($sistema->getCat());

        $this->assertCount($resultadoEsperado, $sistema->getCat());
    }
    
    function testDeveriaRetornarBuscaCat()
    {
        $sistema = new Sistema();
        $categoria = new Categoria('Esportes');
        $sistema->cadastrarCat($categoria);
        $resultadoEsperado = $categoria;
        $resultado = $sistema->buscarCat($categoria->getCodCateg());

        $this->assertEquals($resultadoEsperado, $resultado);
    }

    function testDeveriaRetornarBuscaCatInexistente()
    {
        $sistema = new Sistema();
        $categoria = new Categoria('Esportes');
        $sistema->cadastrarCat($categoria);
        $resultadoEsperado = NULL;
        $resultado = $sistema->buscarCat('-1');

        $this->assertNull($resultado);
    }

    function testDeveriaDeletarCat()
    {
        $sistema = new Sistema();
        $categoria = new Categoria('Esportes');
        $sistema->cadastrarCat($categoria);
        $contagem = count($sistema->getCat());
        $sistema->deletarCat($categoria->getCodCateg());
        $resultadoEsperado = $contagem - 1;
        $resultado = count($sistema->getCat());

        $this->assertCount($resultadoEsperado, $sistema->getCat());
    }

    function testDeveriaDeletarCatInexistente()
    {
        $sistema = new Sistema();
        $categoria = new Categoria('Esportes');
        $sistema->cadastrarCat($categoria);
        $contagem = count($sistema->getCat());
        $sistema->deletarCat('-1');
        $resultadoEsperado = $contagem;
        $resultado = count($sistema->getCat());

        $this->assertCount($resultadoEsperado, $sistema->getCat());
    }


    /////////noticias///////////

    function testDeveriaCadastrarNotic()
    {
        $sistema = new Sistema();
        $noticia = new Noticia('Titulo', 'texto', 'linkImagem');
        $contagem = count($sistema->getNotic());
        $sistema->cadastrarNotic($noticia);
        $resultadoEsperado = $contagem + 1;
        $resultado = count($sistema->getNotic());

        $this->assertCount($resultadoEsperado, $sistema->getNotic());
    }
    
    function testDeveriaRetornarBuscaNotic()
    {
        $sistema = new Sistema();
        $noticia = new Noticia('Titulo', 'texto', 'linkImagem');
        $sistema->cadastrarNotic($noticia);
        $sistema->aprovarNotic($noticia);
        $resultadoEsperado = $noticia;
        $resultado = $sistema->buscarNotic($noticia->getCodNoticia());

        $this->assertEquals($resultadoEsperado, $resultado);
    }

    function testDeveriaRetornarBuscaNoticInexistente()
    {
        $sistema = new Sistema();
        $noticia = new Noticia('Titulo', 'texto', 'linkImagem');
        $sistema->cadastrarNotic($noticia);
        $sistema->aprovarNotic($noticia);
        $resultadoEsperado = NULL;
        $resultado = $sistema->buscarNotic('-1');

        $this->assertNull($resultado);
    }

    function testDeveriaDeletarNotic()
    {
        $sistema = new Sistema();
        $noticia = new Noticia('Titulo', 'texto', 'linkImagem');
        $sistema->cadastrarNotic($noticia);
        $sistema->aprovarNotic($noticia);
        $contagem = count($sistema->getNotic());
        $sistema->deletarNotic($noticia->getCodNoticia());
        $resultadoEsperado = $contagem - 1;
        $resultado = count($sistema->getNotic());

        $this->assertCount($resultadoEsperado, $sistema->getNotic());
    }

    function testDeveriaDeletarNoticInexistente()
    {
        $sistema = new Sistema();
        $noticia = new Noticia('Titulo', 'texto', 'linkImagem');
        $sistema->cadastrarNotic($noticia);
        $sistema->aprovarNotic($noticia);
        $contagem = count($sistema->getNotic());
        $sistema->deletarNotic('-1');
        $resultadoEsperado = $contagem;
        $resultado = count($sistema->getNotic());

        $this->assertCount($resultadoEsperado, $sistema->getNotic());
    }

    function testDeveriaRetornarBuscaNoticPorCat()
    {
        $sistema = new Sistema();
        $noticia = new Noticia('Titulo', 'texto', 'linkImagem');
        $categoria = new Categoria('Esportes');
        $sistema->cadastrarCat($categoria);
        $noticia->categorizar($categoria);
        $sistema->cadastrarNotic($noticia);
        $sistema->aprovarNotic($noticia);
        $resultadoEsperado = count($sistema->getNotic());
        $resultado = $sistema->buscarNoticiasPorCat($categoria->getCodCateg());

        $this->assertCount($resultadoEsperado, $sistema->buscarNoticiasPorCat($categoria->getCodCateg()));
    }

    function testDeveriaRetornarBuscaNoticPorJorn()
    {
        $sistema = new Sistema();
        $noticia = new Noticia('Titulo', 'texto', 'linkImagem');
        $jornalista = new Jornalista('Jose', '12345678901', 'jose@gmail.com', 'senha45', 'historicoLInk');
        $sistema->cadastrarJorn($jornalista);
        $noticia->setJorn($jornalista);
        $sistema->cadastrarNotic($noticia);
        $sistema->aprovarNotic($noticia);
        $resultadoEsperado = count($sistema->getNotic());
        $resultado = $sistema->buscarNoticiasPorJorn($jornalista->getCpf());

        $this->assertCount($resultadoEsperado, $sistema->buscarNoticiasPorJorn($jornalista->getCpf()));
    }

    function testDeveriaRetornarBuscaAdmin()
    {
        $sistema = new Sistema();
        $this->assertNotNull($sistema->buscarAdmin('00000000000'));
    }

    function testDeveriaRetornarBuscaAdminInexistente()
    {
        $sistema = new Sistema();
        $this->assertNull($sistema->buscarAdmin('-1'));
    }
}
?>