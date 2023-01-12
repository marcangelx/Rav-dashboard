<?php

namespace App\Http\Resources;

use App\Models\Quotation;
use Illuminate\Http\Resources\Json\JsonResource;

class AssessmentResource extends JsonResource
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
            'resident_id' => (string)$this->resident_id,
            'attributes' => [
                'assessment_type' => $this->assessment_type,
                'facility_name' => $this->facility_name,
                'clinical_category' => $this->clinical_category,
                'days' => $this->days,
            ],
            'quotations' => QuotationResource::collection($this->quotations)
        ];
    }
}
