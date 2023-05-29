<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsImage extends Model
{
    use HasFactory;

    protected $table = "about_us_images";

    protected $fillable = ['image', 'title', 'sub_title', 'about_us_id'];

    public function aboutUs () {
        return $this->belongsTo(AboutUs::class, 'about_us_id', 'id');
    }

}
