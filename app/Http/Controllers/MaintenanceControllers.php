<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenanse;
use DB;
use Auth;
use App\Models\User;
use Carbon\Carbon;
class MaintenanceControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
            $Maintenanses=DB::table('content_c as c')
         ->join('maitenanse_request as m','m.prod_id','=','c.id')
         ->where(['m.customer_id'=>Auth::user()->id])
         ->paginate('6');


        return view('Customer.maintenanses.index')->with([
            'maintenanses'=>$Maintenanses
        ]);
    }
     public function all_admin()
    {
          $Maintenanses=DB::table('content_c as c')
         ->join('maitenanse_request as m','m.prod_id','=','c.id')
         ->paginate('6');
        return view('Admin.Settings.maintenance')->with([
            'maintenanses'=>$Maintenanses
        ]);
    }
    public function maintenance_request(Request $request,$cart,$product)
    {
                  $product=DB::table('carts as c')
         ->join('content_c as n','n.cart_id','=','c.id')
         ->where(['c.cus_id'=>Auth::user()->id],['n.product_id'=>$product],['c.id'=>$cart])
         ->select('n.*','c.cus_id as customer_id')->first();

         return view('Customer.maintenanses.create')->with([
            'product'=>$product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Customer.maintenanses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $cart=DB::table('carts')->where('id',$request->cart_id)->first();
        DB::table('maitenanse_request')->insert([
            'prod_id'=>$request->product_id, //content_c
            'customer_id'=>Auth::user()->id,  //cart
            'name_customer'=>Auth::user()->name,
            'email_customer'=>Auth::user()->email,
            'message'=>$request->note,
            'status'=>'0',
            'date_purchase'=>$cart->date,
         ]);
         return redirect()->route('maintenance.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
