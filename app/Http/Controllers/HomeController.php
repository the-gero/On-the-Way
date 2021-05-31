<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivery;
use App\Travel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $travels = Travel::orderBy('created_at','desc')->get();
        $dels = Delivery::select('id','pkgType','pkgCredit','fromLoc','toLoc')->where('status','waiting')->orWhere('status','requested')->orderBy('created_at','desc')->get();
        return view('home')->with('dels',$dels)->with('travels',$travels);
    }
}
