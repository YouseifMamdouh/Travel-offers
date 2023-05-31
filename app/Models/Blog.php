<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = "blogs";

    protected $fillable = ['title', 'sub_title' , 'image', 'description', 'created_at'];

    public $translatable = ['title', 'description', 'sub_title', 'location'];

}
