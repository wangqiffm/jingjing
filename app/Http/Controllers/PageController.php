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
use App\Http\Requests\ContactFormRequest;
use App\Tag;

class PageController extends Controller
{
  /**
   *
   *
   * @return Response
   */
  public function index()
  {
    $tags = DB::select('select * from tags');

    $post = Tag::all()->toArray();

    dd($post);

    return view('user.index', ['tags' => tags]);
  }

  /**
   *
   *
   * @return Response
   */
  public function contact(ContactFormRequest $request)
  {
//
//    \Mail::send('emails.contact',
//      array(
//        'name' => $request->get('name'),
//        'email' => $request->get('email'),
//        'user_message' => $request->get('message')
//      ), function($message)
//      {
//        $message->from('wj@wjgilmore.com');
//        $message->to('wj@wjgilmore.com', 'Admin')->subject('TODOParrot Feedback');
//      });


    return redirect('contact')->with('status', 'Thanks for contacting us!');

//    return \Redirect::url('/contact')
//      ->with('message', 'Thanks for contacting us!');

  }
}