<?php

namespace Src\FactoryMethod\MessagePublisher;

interface Publisher
{
    public function publish(Message $message);
}
