<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reviews';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['products_id', 'users_id', 'author', 'content', 'rating', 'status'];

}
