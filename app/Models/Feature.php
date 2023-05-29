<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $table = "features";

    protected $fillable = ['name', 'type_of'];

    public function rooms() {
        return $this->belongsToMany(Room::class, 'room_feature', 'feature_id', 'room_id', 'id', 'id');
    }

}
