<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\User;

class CustomerControllers extends Controller
{
    public function customer()
    {
          $carts=DB::table('carts as c')
         ->join('content_c as n','n.cart_id','=','c.id')->where('c.cus_id',Auth::user()->id)
         ->select('n.*','c.*')->paginate('6');
        return view('Customer.sales')->with(['carts'=>$carts,]);


    }
    public function customer_profile()
    {
        $customer=Auth::user();
        return view('Customer.profile')->with([
            'customer'=>$customer,
        ]);
    }

}
