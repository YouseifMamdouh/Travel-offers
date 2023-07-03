<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutUsDetail extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = "about_us_details";

    protected $fillable = ['title', 'description', 'map'];

    public $translatable = ['title', 'description'];
}
