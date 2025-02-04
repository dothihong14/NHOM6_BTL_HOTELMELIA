<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    // Quan hệ với bảng vị trí
    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
