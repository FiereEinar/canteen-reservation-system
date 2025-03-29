<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stall extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "owner_id",
        "location",
        "opening_hours",
    ];
}
