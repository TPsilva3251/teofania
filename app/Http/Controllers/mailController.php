<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contacts;

class mailController extends Controller
{
    public function CreateMail(Request $request)
    {
        $DataForm = $request->all();
        return view('mail.contacts',compact(['Dataform']));
    }
    public function SendMail()
    {
        // dd("sgsdfgsdfg");
        Mail::to('thiagogua2009@gmail.com')->send(new contacts());
        return 'foi';

    }
}
