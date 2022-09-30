<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TenantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            "id"=>$this->id,
            "name" => $this->name,
            "email" => $this->email,
            "api_token" => $this->api_token,
            "phone" => $this->phone,
            "nationality" => $this->nationality,
            "firstContractDate" => $this->firstContractDate
        ];
    }
}
