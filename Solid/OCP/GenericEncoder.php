<?php

namespace Src\Solid\OCP;

class GenericEncoder
{
    private EncoderFactoryInterface $encoderFactory;
    public function __construct()
    {
    }


    public function encode($data,string $format): string
    {
        $encoder = $this->encoderFactory->createEncoder($format);

        return $encoder->encode($data);
    }
}
