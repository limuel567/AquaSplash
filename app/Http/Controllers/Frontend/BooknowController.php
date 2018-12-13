<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BooknowController extends Controller
{
    function getBooknowFirstStep()
    {
        return view('frontend.booknow.first-step');
    }

    function getBooknowLastStep()
    {
        return view('frontend.booknow.last-step');
    }
}
