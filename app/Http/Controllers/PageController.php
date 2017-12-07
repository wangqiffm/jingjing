<?php
/**
 * Created by PhpStorm.
 * User: tim.wang
 * Date: 05.09.2017
 * Time: 11:48
 */

namespace App\Http\Controllers;

use App\Mail\ContactSent;
use App\Mail\ReservationSent;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Tag;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\JsonResponse;

class PageController extends Controller {

  /**
   *
   *
   * @return Response
   */
  public function index() {
    $tags = DB::select('select * from tags');

    $post = Tag::all()->toArray();

    dd($post);

    return view('user.index', ['tags' => tags]);
  }

  /**
   *
   *
   * @return JsonResponse
   */
  public function contact(ContactFormRequest $request) {
    //    $order = Order::findOrFail($orderId);

    //    dump($request->input('reservation'));

    $send_reservation_to = config('mail.from.address');

    $send_reservation_to = env('MAIL_TO');

//    dd($request->input('contact'));
    Mail::to($send_reservation_to)
      ->send(new ContactSent($request->input('contact')));
    $text = 'Thanks for contacting us!';


    return response()->json([
      'message' => $text,
      'state'   => 'CA',
    ]);

    //        return redirect('/')->with('message.content', $text)->with('message.level', 'info');

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

    //      $rules = ['captcha' => 'required|captcha'];
    //      $validator = Validator::make(Input::all(), $rules);
    //      if ($validator->fails())
    //      {
    //          echo '<p style="color: #ff0000;">Incorrect!</p>';
    //      }
    //      else
    //      {
    //          echo '<p style="color: #00ff30;">Matched :)</p>';
    //      }

    //    return redirect('contact')->with('status', 'Thanks for contacting us!');

    //    return \Redirect::url('/contact')
    //      ->with('message', 'Thanks for contacting us!');

  }

  public function reservation(Request $request) {
    //    $order = Order::findOrFail($orderId);

    //    dump($request->input('reservation'));

    $send_reservation_to = config('mail.from.address');

    $send_reservation_to = env('MAIL_TO');

    Mail::to($send_reservation_to)
      ->send(new ReservationSent($request->input('reservation')));
    $text = 'Vielen Dank für Ihre Reservierung. Wir werden Ihre Anfrage schnellstmöglich zu bearbeiten.
  Bitte beachten Sie, dass Ihre Reservierung erst dann Gültigkeit hat, wenn Sie von uns eine schriftliche Bestätigung erhalten haben.

  Wir freuen uns darauf, Sie schon bald als Gast in unserem Hause zu begrüßen.

  Ihr Team vom Jingjing Asia Restaurant';
    return response()->json([
      'message' => $text,
      'state'   => 'CA',
    ])->withCallback($request->input('callback'));
    //    return redirect('/')->with('message.content', $text)->with('message.level', 'info');
  }
}