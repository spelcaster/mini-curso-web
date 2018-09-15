<?php

namespace App;

require_once "AccountAbstract.php";

use App\AccountAbstract;

class CorrenteAccount extends AccountAbstract {
    public function __construct()
    {
        $this->setTipo("corrente");
    }

    public function deposit(float $value)
    {
        $inc = 0;

        if ($value > 10) {
            $inc = 1;
        }

        $this->saldo += $value + $inc;
    }
}
