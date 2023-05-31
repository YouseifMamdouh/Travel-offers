<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class OurProgramme extends Model
{
    use HasFactory;
    use HasTranslations;

    protected  $table = "our_programmes";

    protected $fillable = ['name', 'title', 'description', 'cover','price', 'discount', 'plan', 'city_id'];

    public $translatable = ['name', 'title', 'description', 'plan'];

    public function progImages() {
        return $this->hasMany(ProgrammeImage::class, 'programme_id', 'id');
    }

    public function city() {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }


    public function features() {
        return $this->belongsToMany(Feature::class, 'programme_feature', 'programme_id', 'feature_id', 'id', 'id');
    }

}
