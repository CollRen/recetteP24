<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Http\Resources\CategoryResource;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category'];

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function recette(): HasOne
    {
        return $this->hasOne(recette::class);
    }

    protected function category(): Attribute
    {
        return Attribute::make(
            get: fn($value) => json_decode($value, true),
            set: fn($value) => json_encode($value)
        );
    }

    static public function categories(){
        $resource = CategoryResource::collection(self::select()->orderBy('category')->get());
        $data = json_encode($resource);
        return json_decode($data, true);
    }
}
