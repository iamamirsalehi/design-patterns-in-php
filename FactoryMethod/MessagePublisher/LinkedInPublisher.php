<?php

namespace Src\FactoryMethod\MessagePublisher;


class LinkedInPublisher implements Publisher
{
    public function publish(Message $message)
    {
        echo "Hello, This is a message from linkedIn. Best";
    }
}
