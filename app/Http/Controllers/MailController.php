<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $data = ['phone' => $request->phone,
                 'name' => $request->name,
                  'email' => $request->email,
                'message' => $request->message,
                'cc' => $request->cc];

        Mail::send('mailMessage', ['data' => $data], function ($m) use ($data) {
            $m->to(['administracion@censolidiomas.com',' gerenciageneral@censolidiomas.com'], $data["name"])->subject($data["cc"]);
        });
    }
}
