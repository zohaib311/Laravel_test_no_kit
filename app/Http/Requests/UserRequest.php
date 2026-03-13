<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'username'     => ['required', 'string', 'max:255'],
            'useremail'    => ['required', 'email', 'max:255'],
            'userphone'    => ['required', 'nemeric', 'max:14'],
            'useraddress'  => ['required', 'string', 'max:255'],
            'usercity'     => ['required', 'string', 'max:255'],
            'usercountry'  => ['required', 'string', 'max:255'],
            'userposition' => ['required', 'string', 'max:255'],

        ];
    }


    /** 
     * To Print Custom messages with all the text!
     */

    // public function messages(): array
    // {
    //     return [
    //         "username.required" => 'User Name is required!',
    //         "useremail.required" => 'User Email is required!',
    //         "userphone.nemeric" => 'User Phone with in 14 characters',
    //         "useraddress.required" => 'User Address is required.',
    //         "usercity.required" => 'User City is be numeric.',
    //         "usercountry.required" => 'User Country is required.',
    //         "userposition.required" => 'User Position is required.',
    //     ];
    // }


    /**
     * To Print Custom attribute only no all the text!
     */

    public function attributes()
    {
        return [
            'username' => 'User Name',
            'useremail' => 'User Email',
            'userphone' => 'User Phone',
            'useraddress' => 'User Address',
            'usercity' => 'User City',
            'usercountry' => 'User Country',
            'userposition' => 'User Position',
        ];
    }

    /**
     * Only show message to first Failure.
     */
    protected $stopOnFirstFailure = true;
}
