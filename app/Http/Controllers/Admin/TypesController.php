<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Type;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        $categories=Category::all();
        return view('Admin.Settings.type_add')->with([
            'categories'=>$categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                    $input['name']=$request->name;
                     $input['category_id']=$request->category_id;


                   Type::create([
                    'name'=> $input['name'],
                    'category_id'=> $input['category_id'],

                    ]);

                       if($request->input('action')=='save')
            {
                return redirect()->route('types.index')->with([
                'message' => 'Realty edited successfully',
                'alert-type' => 'success',
            ]);
            }
            else
            {
                     return redirect()->route('types.create')->with([
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
        $type=Type::where('id',$id)->first();
        $categories=Category::all();
            return view('Admin.Settings.type_edit')->with([
            'categories'=>$categories,
            'type'=>$type,
        ]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $input['name']=$request->name;
                     $input['category_id']=$request->category_id;
        $type=Type::where('id',$id)->first();
        $type->update([
          'name'=> $input['name'],
                    'category_id'=> $input['category_id'],
        ]);
          return redirect()->route('types.index')->with([
                'message' => 'Realty edited successfully',
                'alert-type' => 'success',
            ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $type=Type::where('id',$id)->first();
          $type->delete();
            return redirect()->route('types.index')->with([
                'message' => 'Realty edited successfully',
                'alert-type' => 'success',
            ]);
    }
    
      public function remove(string $id)
    {
          $type=Type::where('id',$id)->first();
          $type->delete();
            return redirect()->route('types.index')->with([
                'message' => 'Realty edited successfully',
                'alert-type' => 'success',
            ]);
    }
}
