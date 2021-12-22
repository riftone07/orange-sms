<?php

namespace Riftone07\OrangeSms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
class SmsApiController extends Controller
{
    public function sendMessage($telephone,$message)
    {


        envoyer_sms(telephone,$message);

        return redirect()->back()->with('message','Sms envoyé avec success');
    }
}
