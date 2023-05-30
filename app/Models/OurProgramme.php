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

    protected $fillable = ['name', 'title', 'description', 'cover'];

    public $translatable = ['name', 'title', 'description'];

    public function progImages() {
        return $this->hasMany(ProgrammeImage::class, 'programme_id', 'id');
    }

}
