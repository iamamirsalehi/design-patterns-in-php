<?php

namespace Src\Solid\OCP;

use http\Exception\InvalidArgumentException;

class EncoderFactory implements EncoderFactoryInterface, EncoderFactoryConfigInterface
{
    private $factories = [];

    public function addNewFactory(string $format, callable $factory)
    {
        $this->factories[$format] = $factory;
    }

    public function createEncoder(string $format): EncoderInterface
    {
        if (!isset($this->factories[$format])) {
            throw new InvalidArgumentException('Invalid format');
        }

        $factory = $this->factories[$format];

        return $factory();
    }
}
