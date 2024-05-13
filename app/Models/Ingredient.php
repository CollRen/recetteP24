<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Http\Resources\IngredientResource;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'quantite', 'recette_id', 'umesure_id'];

    public function recette(): BelongsTo
    {
        return $this->belongsTo(Recette::class);
    }


}
