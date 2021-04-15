<?php
declare(strict_types=1);

namespace App\Domain\Repository;


use App\Models\Product;

interface CustomerReadRepository
{
    public function getAll(): array;
}
