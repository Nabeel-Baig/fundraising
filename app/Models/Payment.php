<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'order_id',
        'stripe_id',
        'amount',
        'balance_transaction',
        'currency',
        'description',
        'payment_id',
        'country',
        'exp_month',
        'exp_year',
        'fingerprint',
        'card_number',
        'receipt_url',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
