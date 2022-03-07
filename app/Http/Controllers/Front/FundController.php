<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FundController extends Controller
{
    final public function index(Category $category): View
    {
        $category = $category->load('funds');
        return view('front.fund',compact('category'));
    }
}
