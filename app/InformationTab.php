<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformationTab extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'informationtabs';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'sort_order', 'status'];

}
