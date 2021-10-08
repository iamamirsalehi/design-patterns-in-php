<?php

namespace Src\AbstractFactory\ProductPresenter\Presenters\DownloadableProductPresenter;


use Src\AbstractFactory\ProductPresenter\Presenter;

class DownloadableProductTitlePresenter  extends Presenter
{
    public function present()
    {
        return $this->product->title();
    }
}
