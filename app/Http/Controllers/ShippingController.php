<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function shipping()
    {
        return view('backend.pages.shipping');

    }
}
