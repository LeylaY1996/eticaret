<?php

namespace App\Http\Controllers\backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Service;

class ServiceController extends Controller
{
    public function services(){
        $services = Service::all();
        return view('backoffice.pages.services',compact('services'));
    } 

    public function servicesSave(Request $request){
        $services= new Service();

        $services->title = $request->title;
        $services->description = $request->description;
        $services->image = $request->image;

        $services->save();

        return redirect()->back();
    }
}
