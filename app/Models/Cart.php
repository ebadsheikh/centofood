<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable =
    [
        'food_id',
        'user_id',
        'quantity',
        'status',
        'payment_id',
    ];
    public function food()
    {
        return $this->belongsTo(Food::class, 'food_id');
    }

    public const STATUS  = [
        'pending'       => 0,
        'in_process'    => 1,
        'success'       => 2,
        'error'         => 3
    ];
}
