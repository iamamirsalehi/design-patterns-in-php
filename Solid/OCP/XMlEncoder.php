<?php

namespace Src\Solid\OCP;

class XMlEncoder implements EncoderInterface
{

    public function encode($data): string
    {
        return 'XML';
    }
}
