<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Recette extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'temps_preparation',
        'temps_cuisson',
        'user_id',
        'category_id'
    ];

    public function ingredients(): HasMany
    {
        return $this->hasMany(Ingredient::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function etapes(): HasMany
    {
        return $this->hasMany(etapes::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault(['titre' => 'Pas de recette']);
    }
}
