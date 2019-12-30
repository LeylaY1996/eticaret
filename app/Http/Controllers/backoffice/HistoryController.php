<?php

namespace App\Http\Controllers\backoffice;

use App\Model\History;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class HistoryController extends Controller
{
    public function history(){
        return view('backoffice.pages.history');
    }

    public function historySave(Request $request) {
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            ]);

            $exists = DB::table('histories')->first();

            if ($exists) {
                   $result = DB::table('histories')->where('id', $exists->id)->update([
                   'title' => $request->title,
                   'description' => $request->description,
                   'image' => $request->image
                    ]);
            } else {
                
                $post = new History();
                $post->title = $request->title;
                $post->description = $request->description;
                $post->image = $request->image;
                $result = $post->save();
            }

                    
                return redirect()->back();
    }

}