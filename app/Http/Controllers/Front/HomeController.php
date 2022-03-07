<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home');
    }

    public function home(Request $request)
    {
        if (view()->exists($request->path())) {
            return view('front.'.$request->path());
        }
        return abort(404);
    }

}
