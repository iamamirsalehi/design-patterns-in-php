<?php

namespace Src\AbstractFactory\FormBuilder\Providers\Tailwind\Elements;

use Src\AbstractFactory\FormBuilder\Elements\Span;

class TailwindSpan implements Span
{
    public function render()
    {
        return '<span class="label">Span</span>';
    }
}
