<?php
declare(strict_types=1);

namespace App\Domain\Repository;

use App\Models\Customer;
use App\Models\Variant;

interface CustomerOrderMetaReadRepository
{
    public function getMeanAverageOrderAcrossCustomers(): int;

    public function getMeanAverageOrderValueOfCustomer(Customer $customer): int;
}
