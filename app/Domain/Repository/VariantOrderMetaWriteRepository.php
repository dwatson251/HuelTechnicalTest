<?php
declare(strict_types=1);

namespace App\Domain\Repository;

use App\Models\Customer;
use App\Models\Variant;

interface VariantOrderMetaWriteRepository
{
    public function saveMeanAverageOrderValueOfVariant(Variant $variant): int;
}
