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
//        'captcha' => 'required|captcha',
//      'g-recaptcha-response' => 'bail|required|captcha',
      'contact.name' => 'required',
      'contact.email' => 'required|email',
//      'message' => 'required',
    ];
  }

  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array
   */
  public function messages() {
    return [
//      'g-recaptcha-response.*' => "Please click reCaptcha",
        'captcha' => "Please enter captcha",
      'contact.name.required' => 'Please enter your name.',
      'contact.message.required' => 'Please leave us a message.',
      'contact.email.*' => 'Please leave a valid email address.',
    ];
  }
}
