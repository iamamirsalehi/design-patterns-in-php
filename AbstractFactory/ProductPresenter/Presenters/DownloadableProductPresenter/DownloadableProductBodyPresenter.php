<?php

namespace Src\AbstractFactory\ProductPresenter\Presenters\DownloadableProductPresenter;


use Src\AbstractFactory\ProductPresenter\Presenter;

class DownloadableProductBodyPresenter extends Presenter
{
    public function present()
    {
        return $this->product->body();
    }
}
