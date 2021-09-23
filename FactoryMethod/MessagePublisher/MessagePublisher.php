<?php

namespace Src\FactoryMethod\MessagePublisher;

abstract class MessagePublisher
{
    public function publish(Message $message)
    {
        $publisher = $this->createPublisher();

        $publisher->publish($message);
    }

    abstract public function createPublisher() :Publisher;
}
