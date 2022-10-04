<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'order_id',
        'payment_method',
        'billing_first_name',
        'billing_last_name',
        'billing_address_1',
        'billing_address_2',
        'billing_city',
        'billing_state',
        'billing_postcode',
        'billing_country',
        'billing_email',
        'billing_phone',
        'shipping_first_name',
        'shipping_last_name',
        'shipping_address_1',
        'shipping_address_2',
        'shipping_city',
        'shipping_state',
        'shipping_postcode',
        'shipping_country',
        'status',
        'coupon_code',
        'tax_amount',
        'sub_total',
        'discount_amount',
        'grand_total',
    ];

    public function User()
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }
}
