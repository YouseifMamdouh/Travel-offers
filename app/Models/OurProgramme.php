<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurProgramme extends Model
{
    use HasFactory;

    protected  $table = "our_programmes";

    protected $fillable = ['title', 'description', 'cover'];

    public function progImages() {
        return $this->hasMany(ProgrammeImage::class, 'programme_id', 'id');
    }

}
