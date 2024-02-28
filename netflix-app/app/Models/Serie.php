<?php

namespace App\Models;

use Database\Factories\SerieFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected static function newFactory(): Factory
    {
        return SerieFactory::new();
    }

    public function seasons(){
        return $this->hasMany(Season::class);
    }
}
