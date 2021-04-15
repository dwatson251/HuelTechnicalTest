<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 */
class Order extends Model
{
    public function getId(): int
    {
        return $this->id;
    }
}
