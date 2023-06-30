<?php 
    use PHPUnit\Framework\TestCase;
    require_once './Sistema.php';
    require_once './Jornalista.php';

    class SistemaTest extends TestCase {

        function testDeveriaRetornarBuscaJorn(){
            $sistema = new Sistema();
            $jornalista = new Jornalista('Jose', 'jose@gmail.com', 'senha45', '12345678901', 'historicoLInk', null);
            $sistema->cadastrarJorn($jornalista);
            $sistema->aprovarJorn($jornalista);
            $resultadoEsperado = $jornalista;
            $resultado = $sistema->buscarJorn($jornalista->getCpf());

            $this->assertEquals($resultadoEsperado, $resultado);
        }

        function testDeveriaDeletarJorn(){
            $sistema = new Sistema();
            $jornalista = new Jornalista('Jose', 'jose@gmail.com', 'senha45', '12345678901', 'historicoLInk', null);
            $sistema->cadastrarJorn($jornalista);
            $sistema->aprovarJorn($jornalista);
            $sistema->DeletarJorn($jornalista->getCpf());

            $contagem = count($sistema->getJorn());
            $resultadoEsperado = $contagem;
            $resultado = $sistema->DeletarJorn($jornalista);

            $this->assertEquals($resultadoEsperado, $resultado);
        }
    }

?>