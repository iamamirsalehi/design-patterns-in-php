<?php

namespace Src\AbstractFactory\FormBuilder\Providers\Tailwind\Elements;

use Src\AbstractFactory\FormBuilder\Elements\InputText;

class TailwindInputText implements InputText
{
    public function render()
    {
        return '<input/ type="text" class="form-input">';
    }
}
