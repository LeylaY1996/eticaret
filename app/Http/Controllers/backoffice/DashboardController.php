<?php

namespace App\Http\Controllers\backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        return view('backoffice.dashboard.index');
    }
}
