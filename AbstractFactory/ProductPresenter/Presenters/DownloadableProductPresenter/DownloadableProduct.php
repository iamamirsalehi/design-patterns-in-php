<?php

namespace Src\AbstractFactory\ProductPresenter\Presenters\DownloadableProductPresenter;

use Src\AbstractFactory\ProductPresenter\Product;

interface DownloadableProduct extends Product
{
    public function link(): string;

    public function fileName(): string;

    public function fileSize(): string;

    public function fileExtension(): string;
}
