<?php

namespace App\Http\Controllers\backoffice;

use App\Model\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class AboutusController extends Controller
{
    public function aboutus(){
        return view('backoffice.pages.aboutus');
    }

    public function aboutSave(Request $request){

        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            ]);

            $exists = DB::table('aboutus')->first();

            if ($exists) {
                   $result = DB::table('aboutus')->where('id', $exists->id)->update([
                   'title' => $request->title,
                   'description' => $request->description,
                   'image' => $request->image
                    ]);
            } else {
                
                $post = new AboutUs();
                $post->title = $request->title;
                $post->description = $request->description;
                $post->image = $request->image;
                $result = $post->save();
            }

                    
                return redirect()->back();
    }
}
