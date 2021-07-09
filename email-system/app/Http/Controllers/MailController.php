<?php

namespace App\Http\Controllers;


use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\User;

class MailController extends Controller
{
    public function sendEmail(Request $req){
        $tes1 = User::get();
        $qe = '';
        $inactive = '';
        $req_email = '';
        foreach($req->email as $g){
            $req_email = $g;
            // print_r($g);
            foreach($tes1 as $key=>$user){
                if($req_email == $user->email){
                    $details = [
                            'title'=>'mail from surfside Media',
                            'body'=>'This is for testing mail using gmail'
                        ];
                        $qe .= $user->email.',';
                        Mail::to($user->email)->send(new TestMail($details));
                        $inactive = '';
                }
                if($req_email != $user->email){
                $inactive .= $req_email.',';
            }

            }
        }
       
        $te = [
            "active"=>$qe,
            "inactive"=>$inactive
        ];
        return $te;
        
        
    }
}
