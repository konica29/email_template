<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    public function sendEmail(Request $request)
    {
       return  json_encode($request->all());
    }
}
