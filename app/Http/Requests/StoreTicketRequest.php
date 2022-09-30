<?php

namespace App\Http\Requests;

use App\Rules\ValidContract;
use Illuminate\Foundation\Http\FormRequest;


class StoreTicketRequest extends FormRequest
{


    protected function prepareForValidation()
    {
        $this->merge([
            'message' => json_encode([[
                "sender"=>"client",
                "type"=>"text",
                "content"=>$this->message,
                "time"=>date_format(now(),"Y-m-d h:i:s")
            ]])
        ]);
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            "contract_id"=>["required",new ValidContract()],
            "type"=>["required","string"],
            "subject"=>["required","string"],
            "message"=>["required","json"]
        ];
    }
}
