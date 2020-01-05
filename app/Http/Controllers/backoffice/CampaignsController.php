<?php

namespace App\Http\Controllers\backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Campaign;

class CampaignsController extends Controller
{
    public function campaigns(){
        return view('backoffice.pages.campaigns');
    }

    public function campaignsSAve(Request $request){
        $campaign = new Campaign();
        $campaign->title = $request->title;
        $campaign->description = $request->description;
        $campaign->image = $request->image;
        $campaign->amount = $request->amount;
        $campaign->price = $request->price;
        $campaign->save();

        return redirect()->back();

    }
}
