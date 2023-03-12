<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class CommentListRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, array|\Illuminate\Contracts\Validation\Rule|string>
     */
    public function rules(): array
    {
        return [
            'limit' => 'required|string',
        ];
    }

    public function prepareForValidation()
    {
        /**
         * @var array<string,string> $queryParam
         */
        $queryParam = $this->query();
        $this->merge($queryParam);
    }
}
