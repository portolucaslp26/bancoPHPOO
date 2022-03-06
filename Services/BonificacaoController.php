<?php

namespace Alura\Banco\Modelo\Services;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class BonificacaoController
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacoes(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}