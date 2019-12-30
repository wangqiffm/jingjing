<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest {

  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize() {
    return TRUE;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules() {
    return [
        'captcha' => 'required|size:6',
      'contact.name' => 'required',
      'contact.email' => 'required|email',
      'contact.message_body' => 'required',
    ];
  }

  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array
   */
  public function messages() {
    return [
  'captcha.*' => "Please enter captcha",
      'contact.name.required' => 'Please enter your name.',
      'contact.message.required' => 'Please leave us a message.',
      'contact.email.*' => 'Please leave a valid email address.',
    ];
  }
}
