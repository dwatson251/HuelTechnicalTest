<?php


namespace App\Domain\Repository;


use App\Models\Product;

interface VariantReadRepository
{
    public function getProductVariants(Product $product): array;
}
