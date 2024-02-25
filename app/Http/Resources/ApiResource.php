<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'country' => $this->country,
            '2010'=>$this->y2010,
            '2011'=>$this->y2011,
            '2012'=>$this->y2012,
            '2013'=>$this->y2013,
            '2014'=>$this->y2014,
        ];
    }
}
