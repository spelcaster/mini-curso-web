<?php

namespace App;

interface DepositableAccountInterface {
    function deposit(float $value);
}
