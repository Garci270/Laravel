<?php

namespace App\Models;

use Database\Factories\EpisodeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected static function newFactory(): Factory
    {
        return EpisodeFactory::new();
    }

    public function season(){
        return $this->belongsTo(Season::class);
    }
}
