<?php

require_once "PoupancaAccount.php";
require_once "CorrenteAccount.php";

use App\PoupancaAccount;
use App\CorrenteAccount;

try {
    $account = new PoupancaAccount();

    $account->deposit(20);
    echo $account->getSaldo();

    echo "<br>";

    $account->withdraw(10);
    echo $account->getSaldo();

    echo "<br>";

    $account->withdraw(10);
    echo $account->getSaldo();
} catch (Exception $e) {
    echo $e->getMessage();
}

