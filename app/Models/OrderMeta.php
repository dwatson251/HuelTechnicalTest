<?php
declare(strict_types=1);

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class OrderMeta extends Model
{
    public function getMeanAverageOrderAcrossCustomers(): int;

    public function getMeanAverageOrderValueOfCustomer(Customer $customer): int;

    public function getMeanAverageOrderValueOfVariant(Variant $variant): int;
}
