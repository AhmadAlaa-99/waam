<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\imgs;
use App\Models\Category;
use App\Models\Type;
use Validator;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $products=Product::with('images')->paginate('9');
        return view('Admin.Products.index')->with([
             'products'=>$products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        $types=Type::all();
        return view('Admin.Products.create')->with([
            'categories'=>$categories,
            'types'=>$types,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           $validator = Validator::make($request->all(), [
  'name' => 'required|unique:products',
]);

if ($validator->fails()) {
  return redirect()->back()
           ->withErrors($validator)
           ->withInput();
}


$image_name='doc-'.time().'.'.$request->img->extension();
         $request->img->move(public_path('products_imgs'),$image_name);
           $product=Product::create([
          'name'=>$request->name,
'image'=>$image_name,
'org_price'=>$request->org_price,
'sell_price'=>$request->sell_price,
'type_id'=>$request->type_id,
'desc'=>$request->desc,
'quantity'=>$request->quantity,
'status'=>'0',
]);
 if ($request->hasFile('images'))
 {
 
  foreach ($request->file('images') as $imagefile) {

     $image = new imgs;
     $path='img_product-'.time().'.'.$imagefile->extension();
    $imagefile->move(public_path('images_products'),$path);
     $image->url = $path;
     $image->product_id = $product->id;
     $image->save();
   }
 }
     
 
       if($request->input('action')=='save')
            {
                return redirect()->route('products.index')->with([
                'message' => 'Realty edited successfully',
                'alert-type' => 'success',
            ]);
            }
            else
            {
                     return redirect()->route('products.create')->with([
                'message' => 'Realty edited successfully',
                'alert-type' => 'success',
            ]);

            }


}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product=Product::where('id',$id)->with('images')->first();
          $categories=Category::all();
        $types=Type::all();
        return view('Admin.Products.show')->with([
            'categories'=>$categories,
            'types'=>$types,
            'product'=>$product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $product=Product::where('id',$id)->first();
          $categories=Category::all();
        $types=Type::all();
        return view('Admin.Products.edit')->with([
            'categories'=>$categories,
            'types'=>$types,
            'product'=>$product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
           $validator = Validator::make($request->all(), [
  'name' => 'required|unique:products',
]);

if ($validator->fails()) {
  return redirect()->back()
           ->withErrors($validator)
           ->withInput();
}
        $product=Product::where('id',$id)->with('images')->first();
        $product->update([
            'name'=>$request->name,
            'org_price'=>$request->org_price,
            'sell_price'=>$request->sell_price,
            'type_id'=>$request->type_id,

            'desc'=>$request->desc,
            'quantity'=>$request->quantity,
            'status'=>'0',

        ]);
         if ($request->hasFile('img'))
         {
             $image_name='doc-'.time().'.'.$request->img->extension();
         $request->img->move(public_path('products_imgs'),$image_name);
         
      
         $product->update(['image'=>$image_name,]);
         }
          if ($request->hasFile('images'))
 {
 $product->images()->delete();
  foreach ($request->file('images') as $imagefile) {

     $image = new imgs;
     $path='img_product-'.time().'.'.$imagefile->extension();
    $imagefile->move(public_path('images_products'),$path);
     $image->url = $path;
     $image->product_id = $product->id;
     $image->save();
   }
 }
 
       
         return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $product=Product::where('id',$id)->with('images')->first();
        $product->images()->delete();
        $product->delete();
    }
      public function remove(string $id)
    {
        $product=Product::where('id',$id)->with('images')->first();
        $product->images()->delete();
        $product->delete();
        return redirect()->route('products.index');
    }
}
