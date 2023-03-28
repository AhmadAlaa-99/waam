<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Type;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        $types=Type::all();
        return view('Admin.Settings.site_data')->with([
            'categories'=>$categories,
            'types'=>$types,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Settings.category_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                   $input['name']=$request->title;
                   $input['logo']=$request->icon;

                       if ($request->hasFile('image'))
         {
              $image_cover='doc-'.time().'.'.$request->image->extension();
                   $request->image->move(public_path('covers_categories'),$image_cover);
                $category->update(['image'=>$image_name,]);
                  Category::create([
                    'name'=> $input['name'],
                    'logo'=> $input['logo'],
                    'image'=> $image_cover,
                    ]);

         }
         else
         {
              Category::create([
                    'name'=> $input['name'],
                    'logo'=> $input['logo'],
                    'image'=> 'default.jpg',
                    ]);

         }


                       if($request->input('action')=='save')
            {
                return redirect()->route('categories.index')->with([
                'message' => 'Realty edited successfully',
                'alert-type' => 'success',
            ]);
            }
            else
            {
                     return redirect()->route('categories.create')->with([
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category=Category::where('id',$id)->first();
        return view('Admin.Settings.category_edit')->with([
            'category'=>$category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $category=Category::where('id',$id)->first();
        $category->update([
               'name'=> $request->name,
               'logo'=>$request->icon,
        ]);

           if ($request->hasFile('image'))
         {
               $image_name='doc-'.time().'.'.$request->image->extension();
                $request->image->move(public_path('covers_categories'),$image_name);
                $category->update(['image'=>$image_name,]);

         }
          return redirect()->route('categories.index')->with([
                'message' => 'Realty edited successfully',
                'alert-type' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
           $category=Category::where('id',$id)->delete();
        return redirect()->route('categories.index');
    }

     public function remove(string $id)
    {
           $category=Category::where('id',$id)->delete();
        return redirect()->route('categories.index');
    }

    public function site_data()
    {
        $types=Type::all();
        $categories=Category::all();
        return view('Admin.Settings.site_data')->with([
         'types'=>$types,
         'categories'=>$categories,
        ]);
    }
    public function add_categories(Request $request)
     {
           foreach($request->category_name as $key=>$items )
            {
                   $input['name']=$request->quarter_name[$key];
                   $image_name='doc-'.time().'.'.$request->img->extension();
                   $request->img->move(public_path('categories'),$image_name);
                   Category::create([
                    'name'=> $input['name'],
                    'logo'=> $input['logo'],
                    ]);

            }
            return redirect()->route('site_data');
     }
     public function edit_category(Request $request)
     {
        $category=Category::where('id',$request->id)->first();

        $category->update([
            'name'=>$request->name_category,
        ]);
        if ($request->hasFile('img'))
         {
                   $image_name='doc-'.time().'.'.$request->img->extension();
                   $request->img->move(public_path('categories'),$image_name);
                   $category->update(['logo'=>$image_name,]);
         }
        return redirect()->route('site_data');
     }



       public function add_types(Request $request)
     {
           foreach($request->type_name as $key=>$items )
            {
                   $input['name']=$request->type_name[$key];
                   Type::create([
                    'name'=> $input['name'],
                    ]);

            }
            return redirect()->route('site_data');
     }
     public function edit_type(Request $request)
     {
        $type=Type::where('id',$request->id)->first();

        $type->update([
            'name'=>$request->name_type,
        ]);
        return redirect()->route('site_data');
     }



}
