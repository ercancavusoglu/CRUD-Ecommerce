<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'discounts';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['products_id', 'category_id', 'percent'];

}
