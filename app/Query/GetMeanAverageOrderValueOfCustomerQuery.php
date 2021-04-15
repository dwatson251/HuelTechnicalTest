<?php
declare(strict_types=1);

namespace App\Query;

class GetMeanAverageOrderValueOfCustomerQuery
{
    private $customerId;

    public function __construct(
        int $customerId
    ) {
        $this->customerId = $customerId;
    }
}
