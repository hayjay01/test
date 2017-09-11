<?php

namespace App\Http\Controllers\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Event\Event;
use App\Model\Event\EventAttendee;
use App\Http\Controllers\User\UserController;


class EventController extends Controller
{
    //

    public function attendEvent(Request $request)
    {
    	$event = Event::first();

    	$event_attendee = EventAttendee::create(['user_id'=> auth()->user()->id, 'event_id' => $event->id, 'reference_code' => EventAttendee::referenceCode($event), 'amount' => $event->event_price]);
    	return back()->with('info', 'Ticket Purchased');
    }

    public function profile(Request $request)
    {
        $method = $request->method();
        
        if(strtolower($method) == 'get')
        {
            return view('admin.events.profile');
        }

        $this->validate($request, [
            'name' => 'required|alpha_spaces',

        ]);

        // dd(auth()->user()->id . $request->file('logo')->getClientOriginalName());



        $filename = "users" . '/' . auth()->user()->id . $request->file('logo')->getClientOriginalName();
        $reference = "users" . '_' . auth()->user()->id . $request->file('logo')->getClientOriginalName();
        UserController::deleteImage(auth()->user()->company_logo);
        \Storage::disk('custom')->put($filename, file_get_contents($request->file('logo')));

        auth()->user()->update(['email'=>$request->email, 'phone'=> $request->phone, 'company_name'=>$request->name, 'company_logo' => $reference]);
        return back()->with('info', 'Profile Updated');

    	
    }

    public function eventpageantApplication()
    {
    	return view('admin.events.event_beauty');
    }

    public function addEvent(Request $request)
    {

        $method = $request->method();
        
        if(strtolower($method) == 'get')
        {
    	   return view('admin.events.add_event');
        }

        $this->validate($request, [
            'name' => 'required|alpha_spaces',
            'date' => 'required|date',
            'location' => 'required|alpha_spaces',
            'amount'=> 'required|numeric',
            'last_entry' => 'required|numeric',
            'phone'=>'required|digits:11',
            'duration'=> 'required|numeric',

        ]);

        $event = ['event_name' => $request->name ,'event_date' => $required->date,'event_location' => $request->location,'amount'=> $request->amount,'event_lastEntry' => $request->last_entry,'phone'=>$request->phone,'event_duration'=> $request->duration, 'city' => $request->city, 'venue' =>$request->venue];
    }    

}
