<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgreementController extends Controller
{
    public function privacy_policy()
    {
        return view('agreement.privacy_policy');
    }
     
    public function terms_of_service()
    {
        return view('agreement.terms_of_service');
    }
}
