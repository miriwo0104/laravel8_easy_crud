<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
{
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
     * @return array
     */
    public function rules()
    {
        return [
            'content' => ['required', 'num-only'],
        ];
    }

    /**
     * バリーデーションのためにデータを準備
     *
     * @return void
     */
    public function prepareForValidation() : void
    {
        // 入力された値の末尾にintの9999を付与する
        $this->replace([
            'content' => $this->input('content') . 9999,
        ]);
        // 入力された値の末尾にintの9999を付与する
        $this->merge([
            'name' => 'test',
        ]);
        // 入力された値の末尾にintの9999を付与する
/*         $this->merge([
            'content' => $this->input('content') . 9999,
        ]); */
        // 入力された値をすべてintの0000に置き換える
/*         $this->replace([
            'content' => '0000',
        ]); */
    }
}
