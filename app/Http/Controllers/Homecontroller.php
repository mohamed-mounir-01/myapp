<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\delivery;
use App\Models\health;
use App\Models\cleaning;
use App\Models\babysitting;
use App\Models\gardener;
use App\Models\homerepair;
use App\Models\data;
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
public function compose()
{
    return view('compose');
}
public function booking()
{
    return view('booking');
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
public function store(Request $request){{
    // $input = $request->all();
    // $b_exists = data::where('first_name','=',$input['first_name'])->exists();
    // if($b_exists){
    //     session()->flash('Error','client aready exists');
    //     return redirect('/data');
    // }
    // else{
        // data::create([
        //     'first_name' => $request->first_name,
        //     'second_name' => $request->second_name,
        //     'email' => $request->email,
        //     'adress' => $request->adress,
        //     'city' => $request->city,
        //     'code_postal' => $request->code_postal,
        //     'service' => $request->service,
        //     'plan' => $request->plan,
        // ]);
        // session()->flash('Add','client added successfuly');
        // return redirect('/data');
        $validateData = $request->validate([

            'first_name' => 'required',
            'second_name' => 'required',
            'email' => 'required',
            'adress' => 'required',
            'city' => 'required',
            'code_postal' => 'required',
            'service' => 'required',
            'plan' => 'required',
        ]);

        $table = new data;
        $table->first_name = $request->first_name;
        $table->second_name = $request->second_name;
        $table->email = $request->email;
        $table->adress = $request->adress;
        $table->city = $request->city;
        $table->service = $request->service;
        $table->plan = $request->plan;
        $table->save();
        return redirect()->route('data')->with('success', 'Details sent!');
    }

}
//La page/vue homecleaning.blade.php
public function homecleaning()
{
    return view('home.homecleaning');
}
public function homecleaningafter(Request $request)
{
    $validateData = $request->validate([
        'name' => 'required',
        'number' => 'required',
        'adress' => 'required',
        'service' => 'required',
    ]);

    $table = new cleaning;
    $table->name = $request->name;
    $table->number = $request->number;
    $table->adress = $request->adress;
    $table->service = $request->service;
    $table->save();
    return redirect()->route('app_homecleaning')->with('success', 'Details sent!');
}


//La page/vue babysitting.blade.php
public function babysitting()
{
    return view('home.babysitting');
}
public function babysittingafter(Request $request)
{
    $validateData = $request->validate([
        'name' => 'required',
        'number' => 'required',
        'adress' => 'required',
        'service' => 'required',
    ]);

    $table = new babysitting;
    $table->name = $request->name;
    $table->number = $request->number;
    $table->adress = $request->adress;
    $table->service = $request->service;
    $table->save();
    return redirect()->route('app_babysitting')->with('success', 'Details sent!');
}

//La page/vue homerepair.blade.php
public function homerepair()
{
    return view('home.homerepair');
}
public function homerepairafter(Request $request)
{
    $validateData = $request->validate([
        'name' => 'required',
        'number' => 'required',
        'adress' => 'required',
        'service' => 'required',
    ]);

    $table = new homerepair;
    $table->name = $request->name;
    $table->number = $request->number;
    $table->adress = $request->adress;
    $table->service = $request->service;
    $table->save();
    return redirect()->route('app_homerepair')->with('success', 'Details sent!');
}

//La page/vue gardener.blade.php
public function gardener()
{
    return view('home.gardener');
}
public function gardenerafter(Request $request)
{
    $validateData = $request->validate([
        'name' => 'required',
        'number' => 'required',
        'adress' => 'required',
        'service' => 'required',
    ]);

    $table = new gardener;
    $table->name = $request->name;
    $table->number = $request->number;
    $table->adress = $request->adress;
    $table->service = $request->service;
    $table->save();
    return redirect()->route('app_gardener')->with('success', 'Details sent!');
}

//La page/vue delivery.blade.php
public function delivery()
{
    return view('home.delivery');
}
public function deliveryafter(Request $request)
{
    $validateData = $request->validate([
        'name' => 'required',
        'number' => 'required',
        'adress' => 'required',
        'service' => 'required',
    ]);

    $table = new delivery;
    $table->name = $request->name;
    $table->number = $request->number;
    $table->adress = $request->adress;
    $table->service = $request->service;
    $table->save();
    return redirect()->route('app_delivery')->with('success', 'Details sent!');
}

//La page/vue health.blade.php
public function health()
{
    return view('home.health');
}
public function healthafter(Request $request)
{
    $validateData = $request->validate([
        'name' => 'required',
        'number' => 'required',
        'adress' => 'required',
        'service' => 'required',
    ]);

    $table = new health;
    $table->name = $request->name;
    $table->number = $request->number;
    $table->adress = $request->adress;
    $table->service = $request->service;
    $table->save();
    return redirect()->route('app_health')->with('success', 'Details sent!');
}
public function adminhome()
{
    return view('home.dashboard');
}

}
