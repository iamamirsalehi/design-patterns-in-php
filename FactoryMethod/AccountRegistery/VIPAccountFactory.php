<?php

class VIPAccountFactory extends AccountCreator
{

    protected function getAccount(): Account
    {
        return new VIPAccount();
    }
}
