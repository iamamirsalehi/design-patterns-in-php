<?php

namespace Src\AbstractFactory\FormBuilder\Providers\Bootstrap;

use Src\AbstractFactory\FormBuilder\Elements\Button;
use Src\AbstractFactory\FormBuilder\Elements\InputText;
use Src\AbstractFactory\FormBuilder\Elements\Span;
use Src\AbstractFactory\FormBuilder\Elements\TextArea;
use Src\AbstractFactory\FormBuilder\FormUIFactory;
use Src\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\BootstrapButton;
use Src\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\BootstrapInputText;
use Src\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\BootstrapSpan;
use Src\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\BootstrapTextArea;

class BootstrapFormUIFactory implements FormUIFactory
{
    public function createButton(): Button
    {
        return new BootstrapButton();
    }

    public function createInputText(): InputText
    {
        return new BootstrapInputText();
    }

    public function createTextArea(): TextArea
    {
        return new BootstrapTextArea();
    }

    public function createSpan(): Span
    {
        return new BootstrapSpan();
    }
}
