<?php

namespace Src\AbstractFactory\ProductPresenter\Presenters\DownloadableProductPresenter;

use Src\AbstractFactory\ProductPresenter\Presenter;

class DownloadableProductLinkPresenter extends Presenter
{
    public function present()
    {
        return $this->product->link();
    }
}
