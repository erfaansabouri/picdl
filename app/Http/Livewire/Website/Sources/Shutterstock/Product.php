<?php

namespace App\Http\Livewire\Website\Sources\Shutterstock;

use Livewire\Component;

class Product extends Component
{
    public $shutterstock_id;
    public $loadProduct = false;
    public $showDownloadButton = true;

    public function mount($shutterstock_id)
    {
        $this->shutterstock_id = $shutterstock_id;
    }

    public function loadProduct()
    {
        $this->loadProduct = true;
    }

    public function render()
    {
        $product = getSingleImageShutterstock($this->shutterstock_id) ?? null;
        $similarProducts = getSimilarImagesShutterstock($product) ?? null;
        return view('livewire.website.sources.shutterstock.product', ['product' => $product , 'similar_products' => $similarProducts]);
    }

    public function downloadViaCredit($id)
    {
        $this->showDownloadButton = false;
        return redirect()->route('sources.shutter-stock.download-via-credit', ['shutterstock_id' => $id]);
    }
}
