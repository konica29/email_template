<?php

namespace App\Http\Controllers;

use App\Models\EmailTemplate;

class HomeController extends Controller
{


    public function index()
    {

        return redirect()->route('login');

    }

    public function dashboard()
    {
        return view("admin.dashboard");
    }


}
