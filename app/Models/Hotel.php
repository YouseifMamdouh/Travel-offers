<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Hotel extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $table = 'hotels';

    protected $fillable = ['title', 'city_id', 'country_id', 'location', 'address', 'description', 'rooms_num'];

    public $translatable = ['title', 'location', 'address', 'description'];

    public function city() {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
    public function country() {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function hotelImages() {
        return $this->hasMany(HotelImage::class, 'hotel_id', 'id');
    }

    public function rooms() {
        return $this->hasMany(Room::class, 'hotel_id', 'id');
    }



}
