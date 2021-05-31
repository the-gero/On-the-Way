<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivery;
use App\Travel;
use App\User;
use Auth;
class DeliveriesController extends Controller
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
        $dels = Delivery::orderBy('created_at','desc')->paginate(10);
        return view('deliveries.index')->with('dels', $dels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('deliveries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create A request
        $delivery = new Delivery;
        $delivery->pkgOwner = $request->input('pkgOwner');
        $delivery->pkgOwnerID = Auth::id();
        $delivery->pkgReciever = $request->input('pkgReciever');
        $delivery->pkgType = $request->input('pkgType');
        $delivery->pkgCredit = $request->input('pkgCredit');
        $delivery->fromLoc = $request->input('fromLoc');
        $delivery->toLoc = $request->input('toLoc');
        $delivery->description = $request->input('description');
        $delivery->save();
        return redirect('/delivery')->with('success', 'Request Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $del = Delivery::find($id);
        return view('deliveries.show')->with('del',$del);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dels = Delivery::find($id);
        return view('deliveries.edit')->with('dels',$dels);
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
        $delivery = Delivery::find($id);
        $delivery->pkgOwner = $request->input('pkgOwner');
        $delivery->pkgOwnerID = Auth::id();
        $delivery->pkgReciever = $request->input('pkgReciever');
        $delivery->pkgType = $request->input('pkgType');
        $delivery->pkgCredit = $request->input('pkgCredit');
        $delivery->fromLoc = $request->input('fromLoc');
        $delivery->toLoc = $request->input('toLoc');
        $delivery->description = $request->input('description');
        $delivery->save();
        return redirect('/delivery')->with('success', 'Request Updated');
    }

    public function updateOnAccept($id)
    {
        $delivery = Delivery::find($id);
        $delivery->pkgGivenTo = Auth::user()->name;
        $delivery->pkgGivenToID = Auth::id();
        $delivery->status = "accepted";
        $delivery->save();
        return redirect('/')->with('success', 'Saved');
    }

    public function updateOnRequest($deliveryID,$tid)
    {
        $traveller = User::find($tid);
        $delivery = Delivery::find($deliveryID);
        $delivery->pkgGivenTo = $traveller->name;
        $delivery->pkgGivenToID = $traveller->id;
        $delivery->status = "requested";
        $delivery->save();
        return redirect('/')->with('success', 'Requested to '.$traveller->name);
    }
    
    public function updateOnDelivered($id)
    {
        
        $delivery = Delivery::find($id);
        if(Auth::id()==$delivery->pkgOwnerID)
        {
            $delivery->status = "delivered";
        $delivery->save();
        $user = User::find($delivery->pkgGivenToID);
        $user->credits = $user->credits + $delivery->pkgCredit;
        $user->save();
        
        return redirect('/')->with('success', 'Rewarded  '.$user->name);
        }
        return redirect('/')->with('error', 'Unauthorised');
        
    }

    public function updateOnUndo($id)
    {

        $delivery = Delivery::find($id);
        if(Auth::id()==$delivery->pkgGivenToID)
        {
        
        $delivery->status = "waiting";
        $delivery->pkgGivenTo = "looking";
        $delivery->pkgGivenToID = null;
        $delivery->save();
                
        return redirect('/')->with('success', 'Rejected');
        }
        return redirect('/')->with('error', 'Unauthorised');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delivery = Delivery::find($id);
        
        //Check if delivery exists before deleting
        if (!isset($delivery)){
            return redirect('/deliveries')->with('error', 'No delivery Found');
        }
        // Check for correct user
        if(Auth::id() != $delivery->pkgOwnerID){
            return redirect('/deliveries')->with('error', 'Unauthorized Page');
        }
                
        $delivery->delete();
        return redirect('/deliveries')->with('success', 'Trip Removed');
    }
}
