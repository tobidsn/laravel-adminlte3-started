<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function versionone()
    {
        return view('dashboard.v1');
    }
    
    public function versiontwo()
    {
        return view('dashboard.v2');
    }

    public function versionthree()
    {
        return view('dashboard.v3');
    }

    public function widget()
    {
        return view('dashboard.widget');
    }    

    public function charts()
    {
        return view('dashboard.charts');
    }

    public function flot()
    {
        return view('dashboard.flot');
    }
    
    public function inline()
    {
        return view('dashboard.inline');
    } 
       
    public function general()
    {
        return view('dashboard.uigeneral');
    }

    public function icons()
    {
        return view('dashboard.icons');
    }

    public function buttons()
    {
        return view('dashboard.buttons');
    }

    public function sliders()
    {
        return view('dashboard.sliders');
    }

    public function fgeneral()
    {
        return view('dashboard.fgeneral');
    }
    
    public function fadvanced()
    {
        return view('dashboard.fadvanced');
    }    
    
    public function feditors()
    {
        return view('dashboard.feditors');
    }
}
