<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        "stall_id",
        "name",
        "description",
        "price",
        "stock",
        "category",
        "image",
    ];
}
