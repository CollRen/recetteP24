<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UmesureResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'Umesure' => isset($this->Umesure[app()->getLocale()]) ? $this->Umesure[app()->getLocale()] : $this->Umesure['en']
        ];
    }
}
