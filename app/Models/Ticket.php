<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
protected $fillable = [
    "user_id",
    "train_service_id",
    "station_id",
    "departure_time",
    "price",
    "status",
];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function train_service()
    {
        return $this->belongsTo(TrainService::class,"train_service_id", "id");
    }
    public function station()
    {
        return $this->belongsTo(Station::class);
    }
}
