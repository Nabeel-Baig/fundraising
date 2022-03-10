<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'order_id',
        'user_id',
        'fund_id',
        'name',
        'email',
        'country',
        'zipcode',
        'description',
        'amount',
        'payment_status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const ORDER_STATUS = ['Paid', 'Unpaid'];

    final public function funds(): BelongsTo
    {
        return $this->belongsTo(Fund::class);
    }

    public function get_order_number()
    {
        return '#' . str_pad($this->id, 8, "0", STR_PAD_LEFT);
    }
}
