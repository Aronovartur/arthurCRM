<?php

namespace App\Http\Requests;

use App\Models\QuestionOption;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateQuestionOptionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('question_option_edit');
    }

    public function rules()
    {
        return [
            'question_id' => [
                'integer',
                'exists:questions,id',
                'nullable',
            ],
            'option_text' => [
                'string',
                'required',
            ],
            'is_correct' => [
                'boolean',
            ],
        ];
    }
}
