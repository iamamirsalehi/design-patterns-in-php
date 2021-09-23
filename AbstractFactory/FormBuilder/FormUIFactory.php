<?php

namespace Src\AbstractFactory\FormBuilder;

use Src\AbstractFactory\FormBuilder\Elements\Button;
use Src\AbstractFactory\FormBuilder\Elements\InputText;
use Src\AbstractFactory\FormBuilder\Elements\Span;
use Src\AbstractFactory\FormBuilder\Elements\TextArea;

interface FormUIFactory
{
    public function createButton(): Button;

    public function createInputText(): InputText;

    public function createTextArea(): TextArea;

    public function createSpan(): Span;
}
