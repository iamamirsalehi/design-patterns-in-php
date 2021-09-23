<?php

namespace Src\Solid\OCP;

interface EncoderFactoryConfigInterface
{
    public function addNewFactory(string $format, callable $factory);
}
