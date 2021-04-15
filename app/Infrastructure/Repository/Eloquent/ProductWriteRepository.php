<?php


namespace App\Infrastructure\Repository\Eloquent;


use App\Models\Product;

class ProductWriteRepository implements \App\Domain\Repository\ProductWriteRepository
{
    public function save(Product $product): void
    {
        $product->save();
    }
}
