<?php

namespace App;

require_once "DepositableAccountInterface.php";

use App\DepositableAccountInterface;

abstract class AccountAbstract  implements DepositableAccountInterface {
    protected $saldo = 0.0;
    private $tipo;
    private $banco = "CEF";

    protected $tipoLista = array(
        "corrente",
        "poupanca",
        "salario",
        "premium"
    );

    public function withdraw(float $value) {
        if (($this->saldo - $value) < 0.0) {
            throw new Exception("Saldo invalido");
        }

        $this->saldo -= $value;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function getBanco()
    {
        return $this->banco;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    protected function setTipo($tipo)
    {
        if (!in_array($tipo, $this->tipoLista)) {
            throw new Exception("Invalid account type");
        }

        $this->tipo = $tipo;
    }
}
