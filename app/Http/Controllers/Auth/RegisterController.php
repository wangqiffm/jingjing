<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends \Backpack\Base\app\Http\Controllers\Auth\RegisterController
{
  /**
   * Create a new user instance after a valid registration.
   *
   * @param array $data
   *
   * @return User
   */
  protected function create(array $data)
  {
    $user_model_fqn = config('backpack.base.user_model_fqn');
    $user = new $user_model_fqn();

    return $user->create([
      'name'     => $data['name'],
      'email'    => $data['email'],
      'firstname'    => $data['firstname'],
      'lastname'    => $data['lastname'],
      'password' => bcrypt($data['password']),
    ]);
  }

  public function showRegistrationForm()
  {
    return redirect()->to('login')->with('warning', 'Registration is disabled.');
  }
}
