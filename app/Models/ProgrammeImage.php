<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgrammeImage extends Model
{
    use HasFactory;

    protected $table = "programme_images";

    protected $fillable = ['programme_id', 'image'];

    public function ourProgramme() {
        return $this->belongsTo(OurProgramme::class, 'programme_id', 'id');
    }

}
