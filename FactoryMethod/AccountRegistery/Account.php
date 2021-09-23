<?php

interface Account
{
    public function interestRate(): float;

    public function minimumBalanceDefinition(): int;
}
