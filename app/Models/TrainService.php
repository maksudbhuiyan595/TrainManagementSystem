<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainService extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "route",
        "status",
    ];
}
