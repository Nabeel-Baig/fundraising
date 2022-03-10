<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Fund;
use App\Models\Order;
use Illuminate\View\View;

class FundController extends Controller
{
    final public function index(Category $category): View
    {
        /*$category = Category::whereId($id)->with(['funds' => function($query) {
            $query->with(['orders' => function ($donation) {
                $donation->where(['payment_status' => 'Paid'])->sum('amount');
            }]);
        }])->first();
        dd($category);*/
        $category = $category->load('funds');
        return view('front.fund',compact('category'));
    }

    final public function fund(Fund $fund): View
    {
        $donations = Order::select(\DB::raw('count(*) as donation_count, SUM(amount) as donation_amount'))->where(['fund_id' => $fund->id, 'payment_status' => 'Paid'])->firstOrFail();
        return view('front.fund_detail',compact('fund','donations'));
    }
}
