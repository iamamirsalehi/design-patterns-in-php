<?php

class VIPAccount implements Account
{
    public function interestRate(): float
    {
        return 1.2;
    }

    public function minimumBalanceDefinition(): int
    {
        return 100000000;
    }
}
