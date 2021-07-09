<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
// use App\Http\Mail;
use Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function mailSending(){
        $to_name = 'DarshanBhai';
$to_email = 'darshan.p1792@gmail.com';
$data = array('name'=>"Ogbonna Vitalis(Fenil)", "body" => "A test mail");
Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
$message->to($to_email, $to_name)
->subject('Laravel Test Mail');
$message->from('nb.sparkle008@gmail.com','Test Mail');
});
    }
}
