<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Category;
use App\Models\imgs;
use App\Models\Product;
use App\Models\slider;
use App\Models\Type;
use App\Models\User;
use App\Models\orders;
use App\Models\customers;
class HomeController extends Controller
{
    public function admin()
    {
        return view('Admin.dashboard');
    }
    public function index()
    {
          $types=Type::all();
          $categories=Category::all();
          $sliders=slider::all();
          $about_us=AboutUs::first();
          $products_latest=Product::latest()->take(12)->get();
        return view('index')->with([
            'types'=>$types,
            'categories'=>$categories,
            'sliders'=>$sliders,
            'about_us'=>$about_us,
            'products_latest'=>$products_latest,
        ]);
    }
    public function product($id)
    {
         $about_us=AboutUs::first();

        $product=Product::where('id',$id)->with('images')->first();
         $relateds=Product::where('type_id',$product->type_id)->latest()->take(9)->get();
          $types=Type::all();
        $categories=Category::all();
        return view('product')->with([
            'types'=>$types,
            'categories'=>$categories,
            'product'=>$product,
               'about_us'=>$about_us,
            'relateds'=>$relateds,
        ]);
    }

     public function products()
    {
        $products=Product::paginate('9');
             $about_us=AboutUs::first();
          $types=Type::all();
        $categories=Category::all();
        return view('products')->with([
            'types'=>$types,
            'categories'=>$categories,
            'products'=>$products,
               'about_us'=>$about_us,
        ]);

    }
      public function category($id)
    {


           $about_us=AboutUs::first();
        $type_ids=Type::where('category_id',$id)->get();
         $ids=[];
         foreach($type_ids as $k)
         {
             $ids[]=$k->id;
         }


        $types=Type::all();
        $products=Product::whereIn('type_id',$ids)->paginate('12');
        $categories=Category::all();
        return view('category')->with([
            'types'=>$types,
            'categories'=>$categories,
            'products'=>$products,
               'about_us'=>$about_us,
        ]);

    }
      public function type($id)
    {
         $about_us=AboutUs::first();
        $ty=Type::where('id',$id)->first();
        $products=Product::where('type_id',$id)->paginate('12');
          $types=Type::all();
        $categories=Category::all();
        return view('type')->with([
            'types'=>$types,
            'categories'=>$categories,
            'products'=>$products,
                'about_us'=>$about_us,
        ]);

    }
      public function contact_us()
    {
          $about_us=AboutUs::first();
          $types=Type::all();
        $categories=Category::all();
        return view('contact_us')->with([
            'types'=>$types,
            'categories'=>$categories,
            'about_us'=>$about_us,
        ]);

    }
      public function about_us()
    {
        $about_us=AboutUs::first();
          $types=Type::all();
          $categories=Category::all();
        return view('about_us')->with([
            'types'=>$types,
            'categories'=>$categories,
            'about_us'=>$about_us,

        ]);
    }

}
