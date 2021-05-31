<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;
use App\Delivery;
use Auth;
class TravelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

    public function index()
    {
        $travels = Travel::where('travellerId',Auth::id())->orderBy('created_at','desc')->paginate(10);
        $dels = Delivery::where('status','requested')->where('pkgGivenToID',Auth::id())->orderBy('created_at','desc')->paginate(10);
        return view('travels.index')->with('travels', $travels)->with('dels', $dels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('travels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Travel = new Travel;
        $userID= Auth::id();
        $Travel->fromLoc = $request->input('fromLoc');
        $Travel->toLoc = $request->input('toLoc');
        $Travel->travellerId = $userID;
        $Travel->trvlDate = $request->input('trvlDate');
        $Travel->travelling_by = $request->input('travelling_by');
        $Travel->save();
        return redirect('/travels')->with('success', 'Trip Posted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $travel = Travel::find($id);
        $dels = Delivery::where('status','waiting')->where('pkgOwnerID',Auth::id())->orderBy('created_at','desc')->get();
        return view('travels.show')->with('travel',$travel)->with('dels',$dels);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $travel = Travel::find($id);
        return view('travels.edit')->with('travel',$travel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Travel = Travel::find($id);
        $userID= Auth::id();
        $Travel->fromLoc = $request->input('fromLoc');
        $Travel->toLoc = $request->input('toLoc');
        $Travel->travellerId = $userID;
        $Travel->trvlDate = $request->input('trvlDate');
        $Travel->travelling_by = $request->input('travelling_by');
        $Travel->save();
        return redirect('/travels')->with('success', 'Trip Posted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $travel = Travel::find($id);
        
        //Check if travel exists before deleting
        if (!isset($travel)){
            return redirect('/travels')->with('error', 'No travel Found');
        }
        // Check for correct user
        if(Auth::id() != $travel->travellerId){
            return redirect('/travels')->with('error', 'Unauthorized Page'.Auth::id().' '.$travel->travellerId);
        }
                
        $travel->delete();
        return redirect('/travels')->with('success', 'Trip Removed');
    }
    
}
