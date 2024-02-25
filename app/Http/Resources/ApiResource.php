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
            'id' => $this->id,
            'country' => $this->country,
            'code'=> $this->code,
            '2010'=>$this->y2010,
            '2011'=>$this->y2011,
            '2012'=>$this->y2012,
            '2013'=>$this->y2013,
            '2014'=>$this->y2014,
            'sum'=>$this->y2010+$this->y2011+$this->y2012+$this->y2013+$this->y2014,
            'average'=>($this->y2010+$this->y2011+$this->y2012+$this->y2013+$this->y2014)/5,
            'median'=>($this->y2010+$this->y2011+$this->y2012+$this->y2013+$this->y2014)/2,
            'max'=>max($this->y2010,$this->y2011,$this->y2012,$this->y2013,$this->y2014),
            'min'=>min($this->y2010,$this->y2011,$this->y2012,$this->y2013,$this->y2014),
        ];
    }
}
