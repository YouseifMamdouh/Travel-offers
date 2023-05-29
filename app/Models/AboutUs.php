<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutUs extends Model
{
    use HasFactory;
    use HasTranslations;


    protected $table = "about_us";

    protected $fillable = ['title', 'description', 'image'];
    public $translatable = ['title', 'description'];



//
//    public function aboutImages() {
//        return $this->hasMany(AboutUsImage::class, 'about_us_id', 'id');
//    }

}
