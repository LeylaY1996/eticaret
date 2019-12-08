<?php

namespace App\Http\Controllers\backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CampaignsController extends Controller
{
    public function campaigns(){
        return view('backoffice.pages.campaigns');
    }

}
