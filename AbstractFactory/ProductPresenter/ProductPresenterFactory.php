<?php

namespace Src\AbstractFactory\ProductPresenter;

interface ProductPresenterFactory
{
    public function present(Product $product);
}
