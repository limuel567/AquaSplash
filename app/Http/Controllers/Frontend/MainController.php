<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    function getIndex()
    {
        return view('frontend.index');
    }

    function getOurWaterpark()
    {
        return view('frontend.our-waterpark');
    }

    function getPrices()
    {
        return view('frontend.prices');
    }

    function getEvents()
    {
        return view('frontend.events');
    }

    function getGallery()
    {
        return view('frontend.gallery');
    }

    function getContactUs()
    {
        return view('frontend.contact-us');
    }

    function getFaq()
    {
        return view('frontend.faq');
    }

    function getTermsAndCondition()
    {
        return view('frontend.terms-and-condition');
    }
}
