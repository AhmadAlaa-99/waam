<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Category;
use App\Models\Type;
use App\Models\Product;
use App\Models\User;
use App\Models\cart;
use Carbon\Carbon;
use App\Models\cart_content;
use DB;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use File;
use Validator;
use App\Notifications\NewCustomer;

class shopController extends Controller
{
    public function store($product_id)
    {
        $product=Product::findOrFail($product_id);
        $cart=session()->get('cart',[]);
        if(isset($cart[$product_id]))
        {
            $cart[$product_id]['quantity']++;
        }
        else
        {
            $cart[$product_id]=
            [
                "product_id"=>$product_id,
                  "product_name"=>$product->name,
                  "img"=>$product->image,
                  "sell_price"=>$product->sell_price,
                  "quantity"=>1,
            ];
        }
        session()->put('cart',$cart);
        return redirect()->route('shop.cart')->with('success','Product add to cart successfully');
    }
     public function shop_cart()
     {
        $about_us=AboutUs::first();
           $categories=Category::all();
            $types=Type::all();
        return view('cart')->with([
              'types'=>$types,
            'categories'=>$categories,
              'about_us'=>$about_us,
        ]);
     }
     public function remove_cart(Request $request)
     {
        if($request->id)
        {
            $cart=session()->get('cart');
            if(isset($cart[$request->id]))
            {
                unset($cart[$request->id]);
                session()->put('cart',$cart);
            }
            session()->put('cart',$cart);
        }
        session()->flash('success','Product Successfully removed!');
     }
       public function update_cart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

       public function cart_added(Request $request,$product_id)
    {
       $product=Product::findOrFail($product_id);
        $cart=session()->get('cart',[]);
        if(isset($cart[$product_id]))
        {
            $cart[$product_id]['quantity']++;
        }
        else
        {
            $cart[$product_id]=
            [
                 "product_id"=>$product_id,
                  "product_name"=>$product->name,
                  "img"=>$product->image,
                  "sell_price"=>$product->sell_price,
                  "quantity"=>$request->quantity,
            ];
        }
        session()->put('cart',$cart);
        return redirect()->route('shop.cart')->with('success','Product add to cart successfully');
    }
   public function checkout()
   {
      $about_us=AboutUs::first();
       $categories=Category::all();
       $types=Type::all();
       $cart=session()->get('cart',[]);
    if(!auth()->check())
    {
          return view('checkout')->with([
              'types'=>$types,
            'categories'=>$categories,
              'about_us'=>$about_us,
        ]);
    }
    else
    {
         DB::table('carts')->insert([
   'date'=>carbon::now(),
    'price_total'=>'0',
    'status'=>'0',
    'cus_id'=>auth::user()->id,
     'note'=>'-',
   ]);
    $cart=DB::table('carts')->latest('id')->first();
    $products=session()->get('cart',[]);
    foreach($products as $k)
    {
          DB::table('content_c')->insert([
            'cart_id'=>$cart->id,
            'product_id'=>$k['product_id'],
            'product_name'=>$k['product_name'],
            'img'=>$k['img'],
            'complete_price'=>$k['sell_price']*$k['quantity'],
            'quantity'=>$k['quantity'],
        ]);
    }
    $pri=DB::table('content_c')->where('cart_id',$cart->id)->sum('complete_price');
    DB::table('carts')->latest('id')->update([ 'price_total'=>$pri,]);
    session()->forget('cart');
    return redirect()->route('customer');
    }
   }
    public function confirm_checkout(Request $request)
   {
       $validator = Validator::make($request->all(), [
  'email' => 'required|unique:users|max:255',
]);

if ($validator->fails()) {
  return redirect()->back()
           ->withErrors($validator)
           ->withInput();
}
       
       $pass = Str::random(12);
    User::create([
    'name'=>$request->name,
    'email'=>$request->email,
    'password'=>bcrypt($pass),
    'lastname'=>$request->lastname,
    'phone'=>$request->phone,
    'role_name'=>'customer',
    'status_user'=>'0',
     ]);
  $user=User::latest()->first();
  $user->notify(new NewCustomer($user,$pass));
  
   DB::table('carts')->insert([
   'date'=>carbon::now(),
    'price_total'=>'0',
    'status'=>'0',
    'cus_id'=>$user->id,
     'note'=>$request->note ?? '-',
   ]);
   $cart=DB::table('carts')->latest('id')->first();
    $products=session()->get('cart',[]);
    foreach($products as $k)
    {
          DB::table('content_c')->insert([
            'cart_id'=>$cart->id,
            'product_id'=>$k['product_id'],
            'product_name'=>$k['product_name'],
            'img'=>$k['img'],
            'complete_price'=>$k['sell_price']*$k['quantity'],
            'quantity'=>$k['quantity'],
        ]);
    }
    $pri=DB::table('content_c')->where('cart_id',$cart->id)->sum('complete_price');
    DB::table('carts')->latest('id')->update([ 'price_total'=>$pri,]);
    session()->forget('cart');
    return redirect()->route('index');
   }
    public function add_cart()
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */


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
