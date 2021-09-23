<?php

namespace Src\FactoryMethod\MessagePublisher;

class LinkedInPublisherFactory extends MessagePublisher
{
    public function createPublisher(): Publisher
    {
        return new LinkedInPublisher();
    }
}
