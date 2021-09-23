<?php

namespace Src\FactoryMethod\MessagePublisher;


class InstagramPublisherFactory extends MessagePublisher
{

    public function createPublisher(): Publisher
    {
        return new InstagramPublisher;
    }
}
