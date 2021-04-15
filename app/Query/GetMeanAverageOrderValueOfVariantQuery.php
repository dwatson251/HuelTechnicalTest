<?php
declare(strict_types=1);

namespace App\Query;

class GetMeanAverageOrderValueOfVariantQuery
{
    private $variantId;

    public function __construct(
        int $variantId
    ) {
        $this->variantId = $variantId;
    }
}
