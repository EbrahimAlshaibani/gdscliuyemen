<?php

namespace App\Http\Controllers;

use App\Mail\TestMailer;
use App\Models\Course;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function createEmail(){
        return view('email');
    }
    public function sendEmail(Request $request){
     
        $image = Course::find(7)->image;
        Mail::to("$request->name")->send(new TestMailer($request->message,$image));
        return redirect()->back();
    }
}
