<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Http\Resources\UmesureResource;

class Umesure extends Model
{
    use HasFactory;

    protected $fillable = ['Umesure'];

    protected function Umesure(): Attribute
    {
        return Attribute::make(
            get: fn($value) => json_decode($value, true),
            set: fn($value) => json_encode($value)
        );
    }

    static public function Umesures(){
        $resource = UmesureResource::collection(self::select()->orderBy('Umesure')->get());
        $data = json_encode($resource);
        return json_decode($data, true);
    }
}
