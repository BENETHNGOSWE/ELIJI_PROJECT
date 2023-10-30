<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contactus;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardhome(){
        $contacts = Contactus::all();
        return view("dashboard.dashboardhomepage", compact("contacts"));
    }

  
}
