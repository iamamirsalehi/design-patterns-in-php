<?php

namespace Src\AbstractFactory\FormBuilder\Providers\Tailwind;

use Src\AbstractFactory\FormBuilder\Elements\Button;
use Src\AbstractFactory\FormBuilder\Elements\InputText;
use Src\AbstractFactory\FormBuilder\Elements\Span;
use Src\AbstractFactory\FormBuilder\Elements\TextArea;
use Src\AbstractFactory\FormBuilder\FormUIFactory;
use Src\AbstractFactory\FormBuilder\Providers\Tailwind\Elements\TailwindButton;
use Src\AbstractFactory\FormBuilder\Providers\Tailwind\Elements\TailwindInputText;
use Src\AbstractFactory\FormBuilder\Providers\Tailwind\Elements\TailwindSpan;
use Src\AbstractFactory\FormBuilder\Providers\Tailwind\Elements\TailwindTextArea;

class TailwindFormUIFactory implements FormUIFactory
{

    public function createButton(): Button
    {
        return new TailwindButton();
    }

    public function createInputText(): InputText
    {
        return new TailwindInputText();
    }

    public function createTextArea(): TextArea
    {
        return new TailwindTextArea();
    }

    public function createSpan(): Span
    {
        return new TailwindSpan();
    }
}
