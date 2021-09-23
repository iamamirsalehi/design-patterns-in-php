<?php

namespace Src\FactoryMethod\MessagePublisher;


class InstagramPublisher implements Publisher
{
    public function publish(Message $message)
    {
        echo "This message is from Instagram";
    }
}
