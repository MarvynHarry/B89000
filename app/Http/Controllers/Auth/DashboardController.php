<?php

namespace App\http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{

    public function index(Request $request){
    
            $request->user()->authorizeRoles('admin');
     
return view('dashboard');
    }



}