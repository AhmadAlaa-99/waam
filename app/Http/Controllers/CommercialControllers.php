<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\cart;
use App\Models\cart_content;
use DB;
use Carbon\Carbon;

class CommercialControllers extends Controller
{
    public function customer_details_show($id)
    {
         $customer=User::where('id',$id)->first();
         $carts=DB::table('carts as c')
         ->join('content_c as n','n.cart_id','=','c.id')->where('c.cus_id',$id)
         ->select('n.*','c.*')->get();

           return view('Admin.Commercial.Customer_details')->with([
            'customer'=>$customer,
            'carts'=>$carts,
        ]);


    }

       public function customer_details_index()
    {
        $customers=User::where([
            'role_name'=>'customer',
            'status_user'=>'1',
        ])->paginate('5');
        return view('Admin.Commercial.Customers')->with([
            'customers'=>$customers,
        ]);
    }

       public function orders_index()
    {
         $carts=DB::table('carts as c')
         ->join('users as n','n.id','=','c.cus_id')
         ->select('n.*','c.*')->where('c.status','=','0')->where('n.role_name','=','customer')->paginate('6');
           return view('Admin.Commercial.Orders')->with([
            'carts'=>$carts,
        ]);
    }
    public function confirm_order($id)
    {
          $cart=DB::table('carts')->where('id',$id)->update(['status'=>'1','date'=>Carbon::now()]);
        $cart=DB::table('carts')->where('id',$id)->first();
        $user=DB::table('users')->where('id',$cart->cus_id)->update(['status_user'=>'1']);
        return redirect()->route('admin');
    }
       public function orders_show($id)
    {
            $carts=DB::table('carts as c')
           ->join('content_c as n','n.cart_id','=','c.id')->where('c.id',$id)
           ->select('n.*','c.*')->get();
             $ca=DB::table('carts')->where('id',$id)->first();
             $co=User::where('id',$ca->cus_id)->first();
             return view('Admin.Commercial.Order_details')->with([
             'carts'=>$carts,
             'ca'=>$ca,
              'co'=>$co,

        ]);
    }
}
