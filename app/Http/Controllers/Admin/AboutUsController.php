<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutUsController extends Controller
{

  public function company_about()
    {
        $company=AboutUs::first();
        return view('Admin.About.details', compact('company'));
    }

  public function company_edit()
    {
        $company=AboutUs::first();
        return view('Admin.About.edit', compact('company'));
    }

    public function company_update(Request $request)
    {
        $about=AboutUs::first();
        $about->update([
            'name'=>$request->name,
            'summary'=>$request->summary,
            'address'=>$request->address,
            'goals'=>$request->goals,
            'vision'=>$request->vision,
            'mission'=>$request->mission,
            'email'=>$request->email,
            'moobile'=>$request->moobile,
            'fax'=>$request->fax,

        ]);
         if ($request->hasFile('logo'))
         {
               $logo_name='doc-'.time().'.'.$request->logo->extension();
                $request->logo->move(public_path('about_imgs'),$logo_name);
                $about->update(['logo'=>$logo_name,]);
         }
                  if ($request->hasFile('image'))
         {
               $image_name='doc-'.time().'.'.$request->image->extension();
                $request->image->move(public_path('about_img'),$image_name);
                $about->update(['image'=>$image_name,]);
         }
         return redirect()->route('company_about');
    }
}
