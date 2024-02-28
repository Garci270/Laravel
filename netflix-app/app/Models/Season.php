<?php

namespace App\Models;

use Database\Factories\SeasonFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    protected static function newFactory(): Factory
    {
        return SeasonFactory::new();
    }

    public function serie(){
        return $this->belongsTo(Serie::class);
    }

    public function episodes(){
        return $this->hasMany(Episode::class);
    }
}
