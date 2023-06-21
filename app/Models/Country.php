<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Country extends Model
{
    use HasFactory;

    use HasTranslations;

    protected $table = "countries";
    protected $fillable = ['title', 'image', 'summary'];

    public $translatable = ['title', 'summary'];


    public function cities() {
        return $this->hasMany(City::class, 'country_id', 'id');
    }

    public function hotels() {
        return $this->hasMany(Hotel::class, 'country_id', 'id');
    }



}
