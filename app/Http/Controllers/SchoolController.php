<?php

namespace App\Http\Controllers;

use App\Model\School\School;
use Auth;
use App\Model\School\SchoolRegistration;
use App\Model\School\Grade;
use App\Model\SubCategory;
use App\Model\Category;
use App\Model\School\SchoolGrade;
use App\Model\School\Campus;
use App\Model\School\SchoolPicture;
use App\Http\Controllers\User\UserController;
use DB;
use Illuminate\Support\Facades\Mail;

use App\Model\Role;

use App\User;


use Illuminate\Http\Request;

class SchoolController extends Controller
{
    //

    public function schools()
    {
        $states = DB::table('states')->get();
        $schools = School::where('status', true)->get();
        $school_types = SubCategory::whereIn('name', ['University', 'Secondary School', 'Primary School'])->get();
    	return view('schools', compact('schools', 'states', 'school_types'));
    }

    public function createSchool(Request $request){
        
        $method  = strtolower($request->method());
        $school_types = SubCategory::whereIn('name', ['University', 'Secondary School', 'Primary School'])->get();
        $lgas = DB::table('lgas')->get();
        $states = DB::table('states')->get(); 
        // dd($states);

        if($method=='get')
        {

            return view('admin.schools.add_school', compact('school_types', 'states', 'lgas'));
        }

        $this->validate($request,[
            'name'=> 'required|alpha_spaces|',
            'email'=> 'required|email',
            'motto'=> 'required|alpha_spaces',
            'school_level' => 'required',
            'phone' => 'required|digits:11',
            
            ]);

            
        $lga = DB::table('lgas')->where('name', $request->lga)->first();
        $state = DB::table('states')->where('name', $request->state)->first();
        // dd($state);
        
        $category = Category::where('name', 'Schools')->first()->id;
        $sub_category = SubCategory::where('name', $request->school_level)->first()->id;
        $attributes = ['name' => $request->name, 'location' => $request->location, 'email' => $request->email, 'category_id' => $category, 'sub_category_id' => $sub_category, 'owner_id' => auth()->user()->id, 'mailing_address' => $request->mailing_address, 'phone' => 'phone', 'motto' => $request->motto, 'vision' => $request->vision, 'mission_statement' => $request->mission, 'aim' => $request->aim, 'why_choose_school' => $request->why_choose_us, 'philosophy' => $request->philosophy, 'core_values' => $request->value, 'club_societies' => $request->societies, 'logo' => $request->file('logo'), 'review' => $request->review, 'state_id' => $state->id, 'lga_id' => $lga->id, 'city' => $request->city];

        // dd($attributes);

        $school = School::updateOrCreate($attributes);
        $company_name = str_replace(' ', '', auth()->user()->ownSchool->name);

        $filename = "schools/". $company_name . '/' . $request->file('logo')->getClientOriginalName();
        $reference = "schools_". $company_name . '_' . $request->file('logo')->getClientOriginalName();
        UserController::deleteImage($school->logo);
        \Storage::disk('custom')->put($filename, file_get_contents($request->file('logo')));
        //$reference = md5(123);
        $school->logo = $reference;
        $school->save();

        return back()->with('info', 'Info Updated');
    }

    public function addGrade(Request $request)
    {
        $method  = strtolower($request->method());

        if($method=='get')
        {
        $grades = Grade::all();
        return view('admin.schools.add_grade', compact('grades'));
        }

        if(isset(auth()->user()->ownSchool->campus))
        {

            $grade = Grade::where('name', $request->grade)->first();

            $school_id = auth()->user()->ownSchool->id;

            $school_grade = SchoolGrade::updateOrCreate(['school_id' => $school_id, 'grade_id'=>$grade->id], ['amount'=> $request->amount]);
            return back()->with('info', 'Grade Added');
        }

        return back()->with('middleware', 'Please Update School Detail!!!');

    }


    public function addCampus(Request $request)
    {
        $method  = strtolower($request->method());

        $states = DB::table('states')->get();

        if($method=='get')
        {        
        return view('admin.schools.add_campus', compact('lgas', 'states'));
        }
        // dd('ji');

         if(isset(auth()->user()->ownSchool->campus))
         {
            $this->validate($request, [
                'name'=>'required|alpha_spaces|',
                'contact_email' => 'required|email',
                'admission_email' => 'required|email',
                'admission_phone' => 'required|digits:11',
                'contact_phone' => 'required|digits:11',
                'mailing_address' => 'required|alpha_spaces'
            ]);
         

        $state = DB::table('states')->where('name', $request->state)->first();

            $campus_info = ['name'=>$request->name,'contact_email' => $request->contact_email,'admission_email' => $request->admission_email,'admission_phone' => $request->admission_phone,'contact_phone' => $request->contact_phone,'mailing_address' => $request->mailing_address, 'city'=> $request->city, 'state_id' => $state->id];

            $campus = Campus::create($campus_info);

            $school = auth()->user()->ownSchool->campus()->save($campus);

            // dd($school);
            return back()->with('info', 'Campus Added');
        }

        return back()->with('middleware', 'Please Update School Detail!!!');
    }

    public function school_page(School $school)
    {
    	return view('school_page', compact('school'));
    }

    public function school_apply(Request $request, School $school)
    {
    	$school_grades = SchoolGrade::where('school_id', $school->id)->pluck('grade_id')->toArray();
        $grades = Grade::whereIn('id', $school_grades)->get();
    	$grade = Grade::where('name', $request->input('class'))->first();
    	$role = Role::where('name', 'User')->first();
    	$method = $request->isMethod('post');

    	if($method)
    	{
    		$this->validate($request, [
    			'first_name' => "required|alpha",
    			'last_name' => "required|alpha",
    			'd.o.b' => "nullable|date",
    			'gender' => "required",
    			'guardian_name' => "required|alpha_spaces",
    			// 'guardian_address' => "required|alpha_spaces",
    			'guardian_email' => "nullable|email",
    			'guardian_relationship' => "required|alpha_spaces",
    			'email' => 'required|email',
    			'password' => 'required|confirmed'

    			]);



				// dd(\Carbon\Carbon::parse($request->d_o_b)->format('Y-m-d'));

    		if(Auth::check()){
    			// dd('hello');
    			$user = Auth::user();
    			// dd($user);
    			$school_apply = SchoolRegistration::create(['first_name' => $request->first_name, 'last_name' => $request->last_name, 'gender' => $request->gender, 'guardian_name' => $request->guardian_name, 'guardian_address' => $request->guardian_address, 'guardian_email' => $request->guardian_email, 'guardian_relationship' => $request->guardian_relationship, 'disability' => $request->disabled, 'disability_type'=> $request->disability_type, 'date_of_birth' => date($request->input('d_o_b')), 'reference_code' => SchoolRegistration::referenceCode($school)]);
    			$school_apply->user()->associate($user)->save();
    			$school_apply->grade()->associate($grade)->save();
    			$school_apply->school()->associate($school)->save();
    			return redirect()->route('school_payment')->with('success', 'Application Successfull');
    		}
    		
    		$user = User::firstOrCreate(['email'=>$request->email, 'password'=>bcrypt($request->password)]);
    		Auth::login($user);
    		$school_apply = SchoolRegistration::create(['first_name' => $request->first_name, 'last_name' => $request->last_name, 'date_of_birth' => $request->input('d_o_b'), 'gender' => $request->gender, 'guardian_name' => $request->guardian_name, 'guardian_address' => $request->guardian_address, 'guardian_email' => $request->guardian_email, 'guardian_relationship' => $request->guardian_relationship, 'disability' => $request->disabled, 'disability_type'=> $request->disability_type, 'reference_code' => SchoolRegistration::referenceCode($school), ]);
    		$school_apply->user()->associate($user)->save();
    		$school_apply->grade()->associate($grade)->save();
    		$user->full_name = $request->first_name . ' ' . $request->last_name;
    		$user->role()->associate($role)->save();
    		$school_apply->school()->associate($school)->save();
    		return redirect()->route('school_payment')->with('success', 'Application Successfull & Acoount Created');

    	}
    	return view('school_form', compact('grades', 'school'));

    }

    public function school_payment()
    {

    	$reg_info = SchoolRegistration::where('user_id', auth()->user()->id)->get();
    	

    	return view('school_payment', compact('reg_info'));	
    }

    public function usersApplications()
    {
        if(isset(auth()->user()->ownSchool->id))
        {
            $applications = SchoolRegistration::where('school_id', auth()->user()->ownSchool->id)->get();
            return view('admin.schools.applications', compact('applications'));
        }
        return back()->with('middleware', 'Please Update School Detail!!!');

    }

    public function admissionStatus(Request $request, SchoolRegistration $school, $status='deleted')
    {
        // dd($status);

        switch ($status) {
            case 'activate':
                # code...
                $school->accepted = true;
                $school->save();

                return back()->with('info', 'Admission Granted');
                break;

            case 'deactivate':
                # code...
                $school->accepted = false;
                $school->save();
                return back()->with('info', 'Admission Declined');
                break;
            case 'deleted':
                # code...

                $school->delete();
                return back()->with('info', 'Admission Dropped');
                break;            
            default:
                # code...
                return back();
                break;
        }
    }

    public function gradeStatus(Request $request, $grade_id=null, $status='deleted')
    {
        $school_grades = SchoolGrade::where('school_id', auth()->user()->ownSchool->id)->pluck('grade_id')->toArray();
        $grades = Grade::whereIn('id', $school_grades)->get();
        // dd($grades);

        $method = strtolower($request->method());
        $status = strtolower($status);

        if ($method == 'get') {
            # code...
            return view('admin.schools.edit_grade', compact('grades'));
        }

        // dd($status);

        switch ($status) {
            case 'update':
                // # code...
                // $attributes = ['school_id'=> auth()->user()->ownSchool->id, 'grade_id' => $grade_id];
                // $school_grade = SchoolGrade::updateOrCreate($attributes);

                $school_grade = SchoolGrade::where([
                ['school_id', auth()->user()->ownSchool->id],
                ['grade_id', $grade_id],
                ])->first();
                // dd($school_grade);
                $school_grade->amount = $request->amount;
                $school_grade->save();


                return back()->with('info', 'Grade Updated');
                break;

            case 'deleted':
                # code...

                $school_grade = SchoolGrade::where([
                    ['school_id', auth()->user()->ownSchool->id],
                    ['grade_id', $grade_id],
                    ])->delete();
                return back()->with('info', 'Grade Dropped');
                break;            
            default:
                # code...
                return back();
                break;
        }

    }

    public function editProfile(Request $request)
    {

        $method  = strtolower($request->method());
        $school_types = SubCategory::whereIn('name', ['University', 'Secondary School', 'Primary School'])->get();
        $lgas = DB::table('lgas')->get();
        $states = DB::table('states')->get();

        $school = School::where('owner_id', auth()->user()->id)->first();
        return view('admin.schools.edit_profile', compact('school', 'school_types', 'lgas', 'states'));
    }





}
