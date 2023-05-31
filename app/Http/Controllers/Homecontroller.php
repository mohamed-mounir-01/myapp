<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    //La page/vue home.blade.php
public function home()
    {
        return view('home.home');
    }

    public function index()
    {
        $data = data::all();
        return view('data.data',compact('data'));
    }
//La page/vue about.blade.php
public function about()
{
    return view('home.about');
}
public function store(Request $request){

}
//La page/vue dashboard.blade.php
public function dashboard()
{
    return view('home.dashboard');
}
public function data()
{
    return view('data');
}
public function data2()
{
    return view('data2');
}
public function inbox()
{
    return view('inbox');
}
//La page/vue homecleaning.blade.php
public function homecleaning()
{
    return view('home.homecleaning');
}

//La page/vue babysitting.blade.php
public function babysitting()
{
    return view('home.babysitting');
}

//La page/vue homerepair.blade.php
public function homerepair()
{
    return view('home.homerepair');
}

//La page/vue gardener.blade.php
public function gardener()
{
    return view('home.gardener');
}


//La page/vue delivery.blade.php
public function delivery()
{
    return view('home.delivery');
}

//La page/vue health.blade.php
public function health()
{
    return view('home.health');
}
}
