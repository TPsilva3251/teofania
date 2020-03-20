<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contacts;


class mailController extends Controller
{
    public function SendMail()
    {
        Mail::to('teofanialiteraturacrista@gmail.com')->send(new contacts());
        return back()->with('mensagem','Seu email foi enviado com sucesso !');
    }
}
