<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
//    $to_name = "Fenil";
//    $to_email = "darshan.p1792@gmail.com";
//    $data = array('name'=>'peter','body'=>"test mail like");
//    Mail::send('mail',$data,function($message) use ($to_name,$to_email){
//         $message->to($to_email)->subject('web testing mail');
//    });

});
// Route::get('/mail','Controller@mailSending' );

Route::get('/send-email',[MailController::class,'sendEmail']);