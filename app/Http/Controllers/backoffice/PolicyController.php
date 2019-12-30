<?php

namespace App\Http\Controllers\backoffice;

use App\Model\Policy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class PolicyController extends Controller
{
    public function policy(){
        return view('backoffice.pages.policy');
    }

    public function policySave(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            ]);

            $exists = DB::table('policies')->first();

            if ($exists) {
                   $result = DB::table('policies')->where('id', $exists->id)->update([
                   'title' => $request->title,
                   'description' => $request->description,
                   'image' => $request->image
                    ]);
            } else {
                
                $post = new Policy();
                $post->title = $request->title;
                $post->description = $request->description;
                $post->image = $request->image;
                $result = $post->save();
            }

                    
                return redirect()->back();

    }
}
