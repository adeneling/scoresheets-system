<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Itinerary;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ItineraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itinerarys = Itinerary::orderBy('created_at','desc')->get();
        return view('backend.pages.itinerary.index', compact('itinerarys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $itinerary = Itinerary::findOrFail(decrypt($id));
        return view('backend.pages.itinerary.show', compact('itinerary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itinerary = Itinerary::findOrFail(decrypt($id));
        return view('backend.pages.itinerary.edit', compact('itinerary'));
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
        $this->validate($request, [

        ]);

        $itinerary = Itinerary::findOrFail($id);
        $itinerary->booking_id = $request->input('booking_id');
        $itinerary->detail = $request->input('detail');
        $itinerary->url = $request->input('url');        
        $itinerary->save();
        \Flash::success('Itinerary Updated');
        return redirect('itinerary');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itinerary = Itinerary::find($id);
        Itinerary::find($id)->delete();
        \Flash::success('Itinerary deleted');
        return redirect('itinerary');
    }

    public function createItinerary($id)
    {
        $user = User::findOrFail(decrypt($id));
        return view('backend.pages.itinerary.create', compact('user'));
    }
    public function postItinerary(Request $request, $id)
    {
        $this->validate($request, [

        ]);

        $user = User::findOrFail($id);
        $itinerary = new Itinerary();
        $itinerary->user_id = $user->id;
        $itinerary->user_nik = $user->nik;
        $itinerary->booking_id = $request->input('booking_id');
        $itinerary->detail = $request->input('detail');
        $itinerary->url = $request->input('url');        
        $itinerary->save();
        \Flash::success('Itinerary Created');
        return redirect('itinerary');
    }
}

