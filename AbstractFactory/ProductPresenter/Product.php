<?php

namespace Src\AbstractFactory\ProductPresenter;

interface Product
{
    public function title(): string;

    public function price(): float;

    public function body(): string;
}
