<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'configs';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['meta_title', 'meta_description', 'meta_keywords', 'logo', 'facebook', 'instagram', 'mail_smtp', 'mail_mail', 'mail_pass'];

}
