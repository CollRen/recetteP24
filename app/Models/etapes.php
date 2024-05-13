<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class etapes extends Model
{
    use HasFactory;
    
     protected $fillable = ['description'];
    public function recette(): HasMany
    {
        return $this->hasMany(recette::class);
    }

}
