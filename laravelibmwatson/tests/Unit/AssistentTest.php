<?php
namespace Unit;

use PHPUnit\Framework\TestCase;
use Guilherme\Assistent\AssistentManager;
 /**
  *
  */
class AssistentTest extends TestCase
{


    public function testMetodoNomeCompletoEmAssistent()
    {
       $this->assertTrue(method_exists(AssistentManager::class,"getNomeCompleto"));

       $nomeCompleto = "Guilherme Ferreira";

       $usuarioTeste = new AssistentManager("Guilherme","Ferreira");
       $this->assertEquals($nomeCompleto,$usuarioTeste->getNomeCompleto());
       $usuarioTeste = new AssistentManager("guilherme","ferreira");
       $this->assertEquals($nomeCompleto,$usuarioTeste->getNomeCompleto());
       $usuarioTeste = new AssistentManager("GUILHERME","FERREIRA");
       $this->assertEquals($nomeCompleto,$usuarioTeste->getNomeCompleto());
       $usuarioTeste = new AssistentManager(" GUILHERME "," FERREIRA ");
       $this->assertEquals($nomeCompleto,$usuarioTeste->getNomeCompleto());

       $nomeCompleto = "Carlos Antônio";

       $usuarioTeste = new AssistentManager("Carlos","Antônio");
       $this->assertEquals($nomeCompleto,$usuarioTeste->getNomeCompleto());
       $usuarioTeste = new AssistentManager("carlos","antônio");
       $this->assertEquals($nomeCompleto,$usuarioTeste->getNomeCompleto());
       $usuarioTeste = new AssistentManager("CARLOS","ANTÔNIO");
       $this->assertEquals($nomeCompleto,$usuarioTeste->getNomeCompleto());
       $usuarioTeste = new AssistentManager(" CARLOS "," ANTÔNIO ");
       $this->assertEquals($nomeCompleto,$usuarioTeste->getNomeCompleto());

    }



}
