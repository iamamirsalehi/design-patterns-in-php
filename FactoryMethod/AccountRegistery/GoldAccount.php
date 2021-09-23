<?php

class GoldAccount implements Account
{

    public function interestRate(): float
    {
        return 3.0;
    }

    public function minimumBalanceDefinition(): int
    {
        return 550000;
    }
}
