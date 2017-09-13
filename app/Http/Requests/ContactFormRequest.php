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
      'g-recaptcha-response' => 'bail|required|captcha',
      'lastname' => 'required',
      'email' => 'required|email',
      'message' => 'required',
    ];
  }

  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array
   */
  public function messages() {
    return [
      'g-recaptcha-response.*' => "Please click reCaptcha",
      'lastname.required' => 'Please enter your lastname.',
      'message.required' => 'Please leave us a message.',
      'email.*' => 'Please leave a valid email address.',
    ];
  }
}
