<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        // 'OwnerName',
        'ProductName',
        'Description',
        'Desired_Offer',
        // 'Municipality',
        'Category',
        'Picture_1',
        'Picture_2',
        'Picture_3',
        'Item_Status',
        // 'user_rating',
    ];
}
