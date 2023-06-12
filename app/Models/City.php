<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class City extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = "cities";
    protected $fillable = ['title', 'image', 'summary', 'country_id'];

    public $translatable = ['title', 'summary'];

    public function country() {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }


}
