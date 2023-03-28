<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mails;
use App\Models\AboutUs;
use App\Models\Category;
use App\Models\Type;
class mailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $about_us=AboutUs::first();
           $categories=Category::all();
            $types=Type::all();
       $mails=mails::paginate('9');
       return view('Admin.mails')->with([
              'types'=>$types,
            'categories'=>$categories,
              'about_us'=>$about_us,
              'mails'=>$mails,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $about_us=AboutUs::first();
           $categories=Category::all();
            $types=Type::all();
            return view('contact_us')->with([
              'types'=>$types,
            'categories'=>$categories,
              'about_us'=>$about_us,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        mails::create([
             'name'=>$request->name,
             'email'=>$request->email,
             'phone'=>$request->phone,
             'subject'=>$request->subject,
             'message'=>$request->message,
        ]);
        return redirect()->route('index');
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
