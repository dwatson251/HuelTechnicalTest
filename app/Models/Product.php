<?php
declare(strict_types=1);

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 */
class Product extends Model
{
    public function getId()
    {
        return $this->id;
    }
}
