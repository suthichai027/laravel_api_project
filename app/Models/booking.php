<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'id_card',
        'phone',
        'address',
        'email',
        'start_date',
        'end_date'
    ];
}
