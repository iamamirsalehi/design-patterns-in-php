<?php

namespace Src\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements;

use Src\AbstractFactory\FormBuilder\Elements\InputText;

class BootstrapInputText implements InputText
{
    public function render()
    {
        return '<input/ type="text" class="form-input">';
    }
}
