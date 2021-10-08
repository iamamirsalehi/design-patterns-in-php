<?php

namespace Src\AbstractFactory\ProductPresenter\Presenters\DownloadableProductPresenter;

use Src\AbstractFactory\ProductPresenter\Product;
use Src\AbstractFactory\ProductPresenter\ProductPresenterFactory;

class DownloadableProductPresenter implements ProductPresenterFactory
{
    public function present(Product $product)
    {
        return new DownloadableProductFactory($product);
    }
}
