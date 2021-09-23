<?php

use App\Models\User;

abstract class AccountCreator
{
    public function register(User $user)
    {
        $account = $this->getAccount();

        return $account->interestRate();
    }

    abstract protected function getAccount(): Account;
}
