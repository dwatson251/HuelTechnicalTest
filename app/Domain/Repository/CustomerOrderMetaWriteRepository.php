<?php
declare(strict_types=1);

namespace App\Domain\Repository;

use App\Models\Customer;
use App\Models\Variant;

interface CustomerOrderMetaWriteRepository
{
    public function saveMeanAverageOrderAcrossCustomers(): int;

    public function saveMeanAverageOrderValueOfCustomer(Customer $customer): int;
}
