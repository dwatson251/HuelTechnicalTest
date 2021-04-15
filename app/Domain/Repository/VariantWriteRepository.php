<?php


namespace App\Domain\Repository;


use App\Models\Variant;

interface VariantWriteRepository
{
    public function saveVariant(Variant $variant): void;
}
