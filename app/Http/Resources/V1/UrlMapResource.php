<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UrlMapResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            'id'=>$this->id,
            'originalUrl'=>$this->original_url,
            'shortUrl'=>$this->short_url,
            'customUrl'=>$this->custom_url,
            'expirationDate'=>$this->expiration_date,
            'userId'=>$this->user_id,
            'alive'=>$this->alive,
        ];
    }
}
