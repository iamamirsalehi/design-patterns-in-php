<?php

namespace Src\AbstractFactory\FormBuilder\Providers\Tailwind\Elements;

use Src\AbstractFactory\FormBuilder\Elements\TextArea;

class TailwindTextArea implements TextArea
{
    public function render()
    {
        return '<textarea class="form-control" cols="30"></textarea>';
    }
}
