<?php
declare(strict_types=1);

namespace App\Domain\Repository;

use App\Models\Product;
use App\Models\Variant;

interface ProductWriteRepository
{
    public function save(Product $product): void;

    public function addVariant(Variant $variant, Product $product): void;
}
