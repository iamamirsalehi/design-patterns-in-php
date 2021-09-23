<?php

namespace Src\AbstractFactory\FormBuilder\Providers\Tailwind\Elements;

use Src\AbstractFactory\FormBuilder\Elements\Button;

class TailwindButton implements Button
{
    public function render()
    {
        return '<button class="btn btn-default">Button</button>';
    }
}
