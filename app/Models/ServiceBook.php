<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceBook extends Model
{
    use HasFactory;

    protected $table = "service_books";

    protected $fillable = ['f_name', 'l_name', 'phone', 'email', 'address', 'service_id'];

    public function service() {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

}
