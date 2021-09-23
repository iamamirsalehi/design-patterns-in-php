<?php

class GoldAccountFactory extends AccountCreator
{
    protected function getAccount(): Account
    {
        return new GoldAccount();
    }
}
