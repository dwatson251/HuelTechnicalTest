<?php
declare(strict_types=1);

namespace App\Domain\Repository;

use App\Models\Order;

interface OrderWriteRepository
{
    public function save(Order $order): void;
}
