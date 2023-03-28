<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\slider;
use DB;

class SlidersController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // $sliders = DB::table('sliders');
       $sliders=slider::all();
        return view('Admin.Sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $image_name='doc-'.time().'.'.$request->img->extension();
          $request->img->move(public_path('imgs_sliders'),$image_name);
          DB::table('sliders')->insert([
            'title'=>$request->title,
            'description'=>$request->description,
            'button_title'=>$request->button_title,
            'button_url'=>$request->button_url,
            'img'=>$image_name,
            ]);

           if($request->input('action')=='save')
            {
                return redirect()->route('sliders.index')->with([
                'message' => 'Realty edited successfully',
                'alert-type' => 'success',
            ]);
            }
            else
            {
                     return redirect()->route('sliders.create')->with([
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
       //  $slider = DB::table('sliders')->where('id',$id);
        $slider=slider::where('id',$id)->first();
        return view('Admin.Sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $slider=slider::where('id',$id)->first();
        $slider->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'button_title'=>$request->button_title,
            'button_url'=>$request->button_url,

        ]);
         if ($request->hasFile('img'))
         {
               $image_name='doc-'.time().'.'.$request->img->extension();
                $request->img->move(public_path('imgs_sliders'),$image_name);
                $slider->update(['img'=>$image_name,]);

         }
          return redirect()->route('sliders.index')->with([
                'message' => 'Realty edited successfully',
                'alert-type' => 'success',
            ]);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


        $slider=slider::where('id',$id)->first();

             $slider->delete();
            session()->flash('Add', 'Add sliders Successfull');
             return back();
    }
        public function remove(string $id)
    {

        $slider=slider::where('id',$id)->first();

             $slider->delete();
            session()->flash('Add', 'Add sliders Successfull');
              return redirect()->route('sliders.index')->with([
                'message' => 'Realty edited successfully',
                'alert-type' => 'success',
            ]);
    }
}
