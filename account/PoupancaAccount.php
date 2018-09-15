<?php

namespace App;

require_once "AccountAbstract.php";

use App\AccountAbstract;

class PoupancaAccount extends AccountAbstract {
    public function __construct()
    {
        $this->setTipo("poupanca");
    }

    public function deposit(float $value)
    {
        $this->saldo += $value;
    }
}
