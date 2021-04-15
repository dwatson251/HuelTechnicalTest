<?php
declare(strict_types=1);

namespace App\Domain\Repository;

use App\Models\Customer;
use App\Models\Variant;

interface VariantOrderMetaReadRepository
{
    public function getMeanAverageOrderValueOfVariant(Variant $variant): int;
}
