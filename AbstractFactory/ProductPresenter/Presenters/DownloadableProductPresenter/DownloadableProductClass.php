<?php

namespace Src\AbstractFactory\ProductPresenter\Presenters\DownloadableProductPresenter;

class DownloadableProductClass implements DownloadableProduct
{

    public function __construct(private array $data)
    {
    }

    public function link(): string
    {
        return $this->data['link'];
    }

    public function fileName(): string
    {
        return $this->data['fileName'];
    }

    public function fileSize(): string
    {
        return $this->data['fileSize'];
    }

    public function fileExtension(): string
    {
        return $this->data['fileExtension'];
    }

    public function title(): string
    {
        return $this->data['title'];
    }

    public function price(): float
    {
        return $this->data['price'];
    }

    public function body(): string
    {
        return $this->data['body'];
    }
}
