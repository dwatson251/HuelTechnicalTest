<?php
declare(strict_types=1);

namespace App\Domain\Repository;

use App\Models\Customer;

interface CustomerWriteRepository
{
    public function save(Customer $product): void;
}
