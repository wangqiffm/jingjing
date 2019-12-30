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
   * @return JsonResponse
   */
  public function contact(ContactFormRequest $request) {

    $send_reservation_to = config('jingjing.to.address');


    Mail::to($send_reservation_to)
      ->send(new ContactSent($request->input('contact')));
    $text = 'Thanks for contacting us!';


    return response()->json([
      'message' => $text,
      'state'   => 'CA',
    ]);

  }

  public function reservation(Request $request) {

  $request->validate([
        'captcha' => 'required|size:6',
    ],
	[
  'captcha.*' => "Please enter captcha",
    ]);

    $send_reservation_to = config('jingjing.to.address');


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