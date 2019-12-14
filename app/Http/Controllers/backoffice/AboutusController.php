<?php

namespace App\Http\Controllers\backoffice;

use App\Model\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use File;

class AboutusController extends Controller
{
    public function aboutus(){
        $about= AboutUs::all();
        return view('backoffice.pages.aboutus',compact('about'));
    }

    public function aboutSave(Request $request){
        $aboutSave= AboutUs::all()->first();
        dd($aboutSave);

        if($aboutSave){
            $aboutSave->slug = str_slug($request->title);
            $aboutSave->title = $request->title;

            if($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('backoffice/asset/img/information/'). $filename;
                $oldImage = $aboutSave->image;
                dd($location);
                $oldLocation = public_path('backoffice/asset/img/information'). $oldImage;
                File::delete($oldLocation);

                Image::make($image)->resize(670,400)->save($location);
                $aboutSave->image = $filename;
            }

            $aboutSave->description = $request->description;
            $aboutSave->save();
        } else {

            $about = new AboutUs();

            if($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = time(). '.' . $image->getClientOriginalExtension();
                $location = public_path('backoffice/asset/img/information'). $filename;
                Image::make($image)->resize(670,480)->save($location);
            }
            $about->slug = str_slug($request->title);
            $about->title = $request->title;
            $about->image = $filename;
            $about->description = $request->description;
            $about->save();
        }
            
        return redirect()->back();

    }
}
