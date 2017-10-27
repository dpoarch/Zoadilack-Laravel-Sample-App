<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use DB;

class Zaodilack extends Controller
{
    //
    public function index(){
    	return view('zaodilack.index');
    }

    public function notify(Request $request){
    	$email = $request->input('email');
        Mail::send('email.notify', ['name' => 'Novica'], function($message) use($email) {
            
            $message->to('davidpoarchtest@gmail.com', 'David Poarch')->subject('Zoadilack Database Configuration');
            $message->from($email, $email);
        });
        return redirect('zoadilack');

    }
}
