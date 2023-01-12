<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuotationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'resident_ref' => $this->resident_ref,
            'discipline' => $this->discipline,
            'pay' => $this->pay,
            'category' => $this->category,
            'gg_score' => $this->gg_score,
            'group' => $this->group,
            'cmi' => $this->icm
        ];
    }
}
