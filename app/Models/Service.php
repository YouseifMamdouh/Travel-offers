<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = "services";

    protected $fillable = ['image', 'title', 'description'];

    public $translatable = ['title', 'description'];

    public function book() {
        return $this->hasMany(ServiceBook::class, 'service_id', 'id');
    }
}
