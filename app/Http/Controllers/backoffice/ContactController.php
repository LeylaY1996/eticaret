<?php

namespace App\Http\Controllers\backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Contact;

use DB;
class ContactController extends Controller
{
    public function contact(){
       
        return view('backoffice.pages.contact');
    }

    public function contactSave(Request $request){

        $this->validate($request,[
            'adress' => 'required',
            'telephone' => 'required',
            'mail' => 'required',
            ]);

            $exists = DB::table('contacts')->first();

            if ($exists) {
                   $result = DB::table('contacts')->where('id', $exists->id)->update([
                   'adress' => $request->adress,
                   'telephone' => $request->telephone,
                   'mail' => $request->mail
                    ]);
            } else {
                
                $post = new Contact();
                $post->adress = $request->adress;
                $post->telephone = $request->telephone;
                $post->mail = $request->mail;
                $result = $post->save();
            }

                    
                return redirect()->back();
    }
}
