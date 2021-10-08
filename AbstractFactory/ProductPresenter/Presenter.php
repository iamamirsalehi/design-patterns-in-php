<?php

namespace Src\AbstractFactory\ProductPresenter;

abstract class Presenter
{
    public function __construct(protected Product $product)
    {
    }

    abstract public function present();
}
