<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Notification;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = Notification::orderBy('created_at','asc')->get();
        return view('backend.pages.notification.index', compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.notification.create-all');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

        ]);
        $users = User::all();
        foreach ($users as $user ) {
            $notification = new Notification();
            $notification->user_id = $user->id;
            $notification->user_nik = $user->nik;
            $notification->title = $request->input('title');
            $notification->message = $request->input('message');
            $notification->save();
        }
        \Flash::success('Notification created for all participant');
        return redirect('notification');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notification = Notification::findOrFail(decrypt($id));
        return view('backend.pages.notification.show', compact('notification'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notification = Notification::findOrFail(decrypt($id));
        return view('backend.pages.notification.edit', compact('notification'));
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

        $notification = Notification::findOrFail($id);
        $notification->title = $request->input('title');
        $notification->message = $request->input('message');
        $notification->save();
        \Flash::success('Notification Updated');
        return redirect('notification');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notification = Notification::find($id);
        Notification::find($id)->delete();
        \Flash::success('Notification deleted');
        return redirect('notification');
    }

    public function createNotification($id)
    {
        $user = User::findOrFail(decrypt($id));
        return view('backend.pages.notification.create', compact('user'));
    }
    public function postNotification(Request $request,$id)
    {
        $this->validate($request, [

        ]);

        $user = User::findOrFail($id);
        $notification = new Notification();
        $notification->user_id = $user->id;
        $notification->user_nik = $user->nik;
        $notification->title = $request->input('title');
        $notification->message = $request->input('message');       
        $notification->save();
        \Flash::success('Notification Created');
        return redirect('notification');
    }

}
