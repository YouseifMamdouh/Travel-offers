<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = "rooms";

    protected $fillable = ['hotel_id', 'title', 'description', 'type_of', 'price'];

    public function hotel() {
        return $this->belongsTo(Hotel::class, 'hotel_id', 'id');
    }

    public function roomImages() {
        return $this->hasMany(RoomImage::class, 'room_id', 'id');
    }


    public function features() {
        return $this->belongsToMany(Feature::class, 'room_feature', 'room_id', 'feature_id', 'id', 'id');
    }


}
