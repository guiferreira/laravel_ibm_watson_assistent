<?php

namespace Guilherme\Assistent;

/**
 *
 */
class AssistentManager
{
  protected $nome;
  protected $sobrenome;

  function __construct(String $nome, String $sobrenome)
  {
    $this->nome = $nome;
    $this->sobrenome = $sobrenome;
  }

  public function getNomeCompleto()
  {
     return ucfirst(mb_strtolower(trim($this->nome),'UTF-8')) .' '. ucfirst(mb_strtolower(trim($this->sobrenome),'UTF-8'));
  }


}
