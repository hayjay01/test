<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\School\SchoolRegistration;
use App\User;
use App\Model\Event\Event;
use App\Model\Event\BeautyPageant;
use App\Model\Role;
use App\Model\School\School;

class AdminController extends Controller
{
    //



    public function vendorsApplications(){

    $school_admins;
    $seminars_admins;
    $realityshow_admins;
    $event_admins;
    $roles = Role::all();
    // $event_id = [];
    $school_id = [];
    $events_beautys = [];
    // dd($roles);
    $events = Event::latest();
    $beautys = BeautyPageant::latest();

    $events->each(function ($value) use(&$events_beautys){
        $owner = $value->eventOwner->full_name;
        $value = $value->toArray();
        $value['type'] = 'Event';
        $value['owner'] = $owner;
        $events_beautys[]=$value;
    });

        $beautys->each(function ($value) use(&$events_beautys){
        $owner = $value->eventOwner->full_name;
        $value = $value->toArray();
        $value['type'] = 'BeautyPageant';
        $value['owner'] = $owner;
        $events_beautys[]=$value;
    });
        // dd($events_beautys);
	
	foreach ($roles as $role) {
			switch ($role->id) {
				case '' . 3:
					# code...
					$school_admins = User::where('role_id', $role->id)->with('ownSchool')->get();
					break;

				case '' . 4:
					# code...
					$event_admins = User::where('role_id', $role->id)->with('ownEvent', 'ownPageant')->get();
					break;

				case '' . 5:
					# code...
					$realityshow_admins = User::where('role_id', $role->id)->get();
					break;

				case '' . 6:
					# code...
					$seminars_admins = User::where('role_id', $role->id)->get();
					break;

			}

		}
        $school_admins->each(function ($value) use(&$school_id){
            $school_id[] = $value->ownSchool->id;
        });	


            !empty($school_id)? true :  $school_admins = $school_admins = User::where('role_id', $role->id)->with('ownSchool')->get();
                
            !empty($event_admins->pluck('id')->toArray())? true: $event_admins = User::where('role_id', $role->id)->with('ownEvent', 'ownPageant')->get();
            // dd(empty($event_id));

    	
    	return view('admin.vendors', compact('school_admins', 'event_admins', 'realityshow_admins', 'seminars_admins', 'events_beautys'));
    }

    public function usersApplications()
    {
    	$applications = SchoolRegistration::latest()->get();
    	return view('admin.applications', compact('applications'));
    }

    public function schoolStatus(Request $request, School $school, $status='deleted')
    {
        // dd($status);

        switch ($status) {
            case 'activate':
                # code...
                $school->status = true;
                $school->save();

                return back()->with('info', 'School Activated');
                break;

            case 'deactivate':
                # code...
                $school->status = false;
                $school->save();
                return back()->with('info', 'School DeActivated');
                break;
            case 'deleted':
                # code...

                $school->delete();
                return back()->with('info', 'School Deleted');
                break;            
            default:
                # code...
                return back();
                break;
        }
    }

    public function eventAdminStatus(Request $request, User $admin, $status='deleted')
    {
    
        switch ($status) {
            case 'activate':
                # code...
                $admin->status = true;
                $admin->save();

                return back()->with('info', 'Admin Activated');
                break;

            case 'deactivate':
                # code...
                $admin->status = false;
                $admin->save();
                return back()->with('info', 'Admin DeActivated');
                break;
            case 'deleted':
                # code...

                // dd('hi');
                $admin->delete();
                return back()->with('info', 'Admin Deleted');
                break;            
            default:
                # code...
                return back();
                break;
        }
    }

    public function eventStatus(Request $request, $id, $type, $status='deleted')
    {
        strtolower($type) == 'event'? $event = Event::find($id):$event = BeautyPageant::find($id);
        
        

        switch ($status) {
            case 'activate':
                # code...
                strtolower($type) == 'event'? $event->update(['status'=>true]): $event->update(['status'=>true]);
                // $admin->status = true;
                // $admin->save();

                return back()->with('info', 'Activated');
                break;

            case 'deactivate':
                # code...
                strtolower($type) == 'beautypageant'? $event->update(['status'=>false]): $event->update(['status'=>false]);
                // $admin->status = false;
                // $admin->save();
                return back()->with('info', 'DeActivated');
                break;
            case 'deleted':
                # code...
                strtolower($type) == 'event'? $event->delete(): $event->delete();
                // dd('hi');
                // $admin->delete();
                return back()->with('info', 'Deleted');
                break;            
            default:
                # code...
                return back();
                break;
        }
    }

}
