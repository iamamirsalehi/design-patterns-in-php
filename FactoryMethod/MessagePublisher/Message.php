<?php

namespace Src\FactoryMethod\MessagePublisher;

class Message
{
    public function __construct(private string $title,
                                private string $content)
    {
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

}
