<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Feature extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = "features";

    protected $fillable = ['name', 'type_of'];

    public $translatable = ['name'];

    public function rooms() {
        return $this->belongsToMany(Room::class, 'room_feature', 'feature_id', 'room_id', 'id', 'id');
    }

}
