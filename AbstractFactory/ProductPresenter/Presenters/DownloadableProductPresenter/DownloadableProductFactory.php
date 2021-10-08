<?php

namespace Src\AbstractFactory\ProductPresenter\Presenters\DownloadableProductPresenter;

class DownloadableProductFactory
{
    public function __construct(private DownloadableProduct $product)
    {
    }

    public function title()
    {
        return new DownloadableProductTitlePresenter($this->product);
    }

    public function body()
    {
        return new DownloadableProductBodyPresenter($this->product);
    }

    public function price()
    {
        return new DownloadableProductPricePresenter($this->product);
    }

    public function link()
    {
        return new DownloadableProductLinkPresenter($this->product);
    }
}
