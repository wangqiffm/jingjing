<?php
/**
 * Created by PhpStorm.
 * User: tim.wang
 * Date: 05.09.2017
 * Time: 11:48
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
  /**
   * Show a list of all of the application's users.
   *
   * @return Response
   */
  public function index()
  {
    $users = DB::select('select * from users where id = ?', [1]);

    return view('user.index', ['users' => $users]);
  }
}