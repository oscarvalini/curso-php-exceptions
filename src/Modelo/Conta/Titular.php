<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa implements Autenticavel
{
    private $endereco;

    public function __construct($cpf, $nome, $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco()
    {
        return $this->endereco;
    }

    public function podeAutenticar($senha)
    {
        return $senha === 'abcd';
    }
}
