<?php

namespace Src\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements;

use Src\AbstractFactory\FormBuilder\Elements\Span;

class BootstrapSpan implements Span
{
    public function render()
    {
        return '<span class="label">Span</span>';
    }
}
