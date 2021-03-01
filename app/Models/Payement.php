<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    use HasFactory;
    protected $fillable = [
        'tx_reference',
        'phone_number',
        'payment_reference',
        'amount',
        'payment_method',
        'updated_at',
        'created_at',
    ];
}
