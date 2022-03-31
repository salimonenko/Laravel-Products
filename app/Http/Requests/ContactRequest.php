<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Если true, то для ВСЕХ пользователей (в т.ч. неавторизованных)
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){ // Валидация полей формы
	
		if(auth()->check()){

			return [
				'NAME' => 'required|min:1|max:100',
				'ARTICLE' => 'required|alpha_num'
        ];
		}else{

			return [
				'NAME' => 'required|min:1|max:100',
        ];
		}
        
    }
	
	public function messages(){
		return [
			'ARTICLE.required' => ' Необходимо заполнить поле "Артикул! Допустимы латинские буквы и цифры."',
			'NAME.required'  => 'Необходимо заполнить поле "Продукт" (от 1 до 100 символов)'
		];
	}
}
