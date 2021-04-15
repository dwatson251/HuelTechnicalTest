<?php
declare(strict_types=1);

namespace App\Infrastructure\Repository\Eloquent;


use App\Models\Customer;

class CustomerWriteRepository implements \App\Domain\Repository\CustomerWriteRepository
{
    public function save(Customer $customer): void
    {
        $customer->save();
    }
}
