<?php


namespace App\Infrastructure\Repository\Eloquent;


use App\Models\Order;

class OrderWriteRepository implements \App\Domain\Repository\OrderWriteRepository
{
    public function save(Order $order): void
    {
        $order->save();
    }
}
