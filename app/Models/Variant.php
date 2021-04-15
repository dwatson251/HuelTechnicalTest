<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property int price
 */
class Variant extends Model
{
    protected $table = 'variants';

    public function getId()
    {
        return $this->id;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}
