<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'information';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'content', 'tabs_id', 'sort_order', 'status', 'viewed', 'meta_title', 'meta_description', 'meta_keywords'];

}
