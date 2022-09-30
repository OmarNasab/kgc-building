<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContractResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            "id"=>$this->id,
            "unit_no"=>$this->unit->no,
            "building_name"=>$this->building->name,
            "start_date"=>$this->start_date,
            "end_date"=>$this->end_date,
            "no_of_payment"=>$this->no_of_payment
        ];
    }
}
