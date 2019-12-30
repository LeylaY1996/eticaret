<?php

namespace App\Http\Controllers\backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Faq;

class FaqController extends Controller
{
    public function faq(){
        $faqs = Faq::all();
        return view('backoffice.pages.faq',compact('faqs'));
    }

    public function faqSave(Request $request){
        $faq = new Faq();
        
        $faq->question = $request->question;
        $faq->answer = $request->answer;

        $result = $faq->save();

        return redirect()->back();
    }
}
