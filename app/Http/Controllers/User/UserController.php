<?php

namespace App\Http\Controllers\User;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\User;
use App\Model\Role;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\User\UserMail;

class UserController extends Controller
{
    //
	public function  login(Request $request)
	{
		$method = $request->isMethod('post');

		if(!$method)
		{
			return view('login');
		}

		// dd($request->email);



            if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            {
				switch (strtolower(auth()->user()->role->name)) 
				{
					case 'user':
						# code...
						return redirect()->intended()->with('info', 'Welcome '. ucfirst(auth()->user()->full_name));

						break;
					case 'school admin':
						# code...
						return redirect()->route('add_school')->with('info', 'Welcome '. ucfirst(auth()->user()->full_name));

						break;
					case 'event & beauty pageant admin':
						# code...
						return redirect()->route('event_beauty_profile')->with('info', 'Welcome '. ucfirst(auth()->user()->full_name));

						break;
					case 'seminars & conference admin':
						# code...
						return redirect()->route('index')->with('info', 'Welcome '. ucfirst(auth()->user()->full_name));

						break;
					case 'realityshow admin':
						# code...
						return redirect()->route('index')->with('info', 'Welcome '. ucfirst(auth()->user()->full_name));

						break;

					case 'admin':
						# code...
						return redirect()->route('index')->with('info', 'Welcome '. ucfirst(auth()->user()->full_name));

						break;
				}            
                // return redirect()->intended()->with('info', 'Welcome '. ucfirst(auth()->user()->full_name));
            }
            elseif (Auth::attempt(['full_name' => $request->email, 'password' => $request->password])) 
            {
                # code...

				switch (strtolower(auth()->user()->role->name))
				{
					case 'user':
						# code...
						return redirect()->intended()->with('info', 'Welcome '. ucfirst(auth()->user()->full_name));

						break;
					case 'school admin':
						# code...
						return redirect()->route('add_school')->with('info', 'Welcome '. ucfirst(auth()->user()->full_name));

						break;
					case 'event & beauty pageant admin':
						# code...
						return redirect()->route('event_beauty_profile')->with('info', 'Welcome '. ucfirst(auth()->user()->full_name));

						break;
					case 'seminars & conference admin':
						# code...
						return redirect()->route('index')->with('info', 'Welcome '. ucfirst(auth()->user()->full_name));

						break;
					case 'realityshow admin':
						# code...
						return redirect()->route('index')->with('info', 'Welcome '. ucfirst(auth()->user()->full_name));

						break;

					case 'admin':
						# code...
						return redirect()->route('index')->with('info', 'Welcome '. ucfirst(auth()->user()->full_name));

						break;
		                // return redirect()->intended()->with('info', 'Welcome '. ucfirst(auth()->user()->full_name));
	            }
	        }
            else
            {
                return back()->with('middleware', 'Wrong email or Password');
            }
	}

	public function signup(Request $request)
	{
		$roles = Role::whereNotIn('name', ['User', 'Super Admin', 'Admin'])->pluck('name');
		// dd($role);

		$method = $request->isMethod('post');

		if(!$method)
		{
			return view('signup', compact('roles'));
		}
		// dd('hello');
		$role = Role::where('name', $request->role)->first();

		$this->validate($request, [
			'email' => 'email:unique|required',
			'full_name' => 'required|alpha_spaces|min:4',
			'password' => 'required|min:4|confirmed',
			'phone'=>'required|digits:11'
			]);
		// dd('hey');


		$user = User::create(['email'=>$request->email, 'password'=>bcrypt($request->password), 'phone'=> $request->phone, 'full_name'=>$request->full_name]);
		// if(!$user){
		// 	return back()->with('info', 'Correct Credentials');
		// }
		// Mail::to($request->email)->send(new UserMail($user, $role->name));

		$user->role()->associate($role)->save();
		Auth::login($user);

		$user_role = strtolower($user->role->name);

		switch ($user_role)
		{
			case 'user':
				# code...
				return redirect()->route('index')->with('info', 'Welcome '. ucfirst(auth()->user()->full_name));

				break;
			case 'school admin':
				# code...
				return redirect()->route('add_school')->with('info', 'Welcome '. ucfirst(auth()->user()->full_name));

				break;
			case 'event & beauty pageant admin':
				# code...
				return redirect()->route('event_beauty_profile')->with('info', 'Welcome '. ucfirst(auth()->user()->full_name));

				break;
			case 'seminars & conference admin':
				# code...
				return redirect()->route('index')->with('info', 'Welcome '. ucfirst(auth()->user()->full_name));

				break;
			case 'realityshow admin':
				# code...
				return redirect()->route('index')->with('info', 'Welcome '. ucfirst(auth()->user()->full_name));

				break;

			case 'admin':
				# code...
				return redirect()->route('index')->with('info', 'Welcome '. ucfirst(auth()->user()->full_name));

				break;
		}

	}

	public function logout()
	{
		Auth::logout();
		return redirect()->route('login')->with('info', 'Logout Successfull');
	}

    public static function showImage($reference)
    {
    	$reference = str_replace('_', '/', $reference);
        $file = \Storage::disk('custom')->get($reference);
        return new Response($file, 200);

    }

    public static function deleteImage($reference)
    {
    	$reference = str_replace('_', '/', $reference);
        \Storage::disk('custom')->delete($reference);
        // $file->delete();
        return new Response('ok', 200);

    }

    public function index()
    {
    	$states = DB::table('states')->get();
    	return view('index', compact('states'));
    }

}
