<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['invoice_no', 'users_id', 'total', 'name', 'email', 'phone', 'fax', 'payment_method', 'payment_name', 'payment_address', 'payment_city', 'payment_postcode', 'shipping_name', 'shipping_address', 'shipping_city', 'shipping_postcode', 'comment', 'status', 'ip', 'user_agent', 'accept_language'];

}
