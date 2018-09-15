<?php

namespace App;

interface WithdrawableAccountInterface {
    protected function withdraw(float $value);
}
