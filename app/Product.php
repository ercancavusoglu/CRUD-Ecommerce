<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'images', 'content', 'quantity', 'amount', 'stock_id', 'category_id', 'sort_order', 'status', 'viewed', 'meta_title', 'meta_description', 'meta_keywords'];

}
