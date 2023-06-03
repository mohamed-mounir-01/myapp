<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\booking;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

//La page/vue dashboard.blade.php
public function dashboard()
{
    return view('home.dashboard');
}
public function data()
{
    $liste = DB::select('select * from data ');
    return view('data',compact('liste'));

}
public function data2()
{
    return view('data2');
}
public function inbox()
{
    return view('inbox');
}
public function compose()
{
    return view('compose');
}
public function booking()
{
    $liste = DB::select('select * from bookings ');
    return view('booking',compact('liste'));
}

//La page/vue contactus.blade.php
public function contactusbefore()
{
    return view('home.contactus');
}
public function contactusafter(Request $request)
{
    $validateData = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'message' => 'required',
    ]);

    $table = new contact;
    $table->name = $request->name;
    $table->email = $request->email;
    $table->message = $request->message;
    $table->save();
    return redirect()->route('app_contactusbefore')->with('success', 'Message sent!');
}
public function store(Request $request){
        $validateData = $request->validate([

            'first_name' => 'required',
            'second_name' => 'required',
            'email' => 'required',
            'adress' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'services' => 'required',
        ]);

        $table = new data;
        $table->first_name = $request->first_name;
        $table->second_name = $request->second_name;
        $table->email = $request->email;
        $table->adress = $request->adress;
        $table->city = $request->city;
        $table->zip = $request->zip;
        $table->services = $request->services;

        $table->save();
        return redirect()->route('data')->with('success', 'Details sent!');
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

public function adminhome()
{
    return view('home.dashboard');
}
public function bookingafter(Request $request){
    $validateData = $request->validate([

        'name' => 'required',
        'number' => 'required',
        'adress' => 'required',
        'service' => 'required',
    ]);

    $table = new booking;
    $table->name = $request->name;
    $table->number = $request->number;
    $table->adress = $request->adress;
    $table->service = $request->service;

    $table->save();
    return redirect()->route('app_home');
}



}
