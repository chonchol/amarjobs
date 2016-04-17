<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $profiles = Profile::where('id', '>=', 1)->paginate(10);              
       // return view('profiles.allProfile', ['profiles' => $profiles]);

                $userID=\Auth::user()->id;
        $data=Profile::where('userID',$userID)->first();
        $data->profilePic=($data->profilePic===NULL)? 'default.icon.png':$data->profilePic;
        $data->genderMale=NULL;
        $data->genderFemale=NULL;
        $data->genderOthers=NULL;
        if($data->gender==='M'){
            $data->genderMale='checked';
        }else if($data->gender==='F'){
            $data->genderFemale='checked';
        }else{
            $data->genderOthers='checked';
        }
        return view('profile',['data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('profiles.addProfile');
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
        $this->validate($request, [
        'firstName' => 'required|unique:posts|max:255',
        'lastName' => 'required',
    ]);

        $profile = [];
        $profile['firstName'] = $request->input('firstName');
        $profile['lastName'] = $request->input('lastName');
        $profile['middleName'] = $request->input('middleName');
        $profile['DOB'] = $request->input('DOB');
        $profile['gender'] = $request->input('gender');
        $profile['featuredProfile'] = $request->input('featuredProfile');
        $profile['email'] = $request->input('email');
        $profile['phone'] = $request->input('phone');
        $profile['summary'] = $request->input('summary');
        $profile['profilePic'] = $request->input('profilePic');
        
        Profile::create($profile);
        return redirect(route('addProfile'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $profile = Profile::findOrFail($id);
        return view('profiles.editProfile', ['id' => $id, 'profile' => $profile]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id=0)
    {
        //
        $id = $request->input("id");
        $profile = Profile::find($id);
        $profile->firstName = $request->input('firstName');
        $profile->lastName = $request->input('lastName');
        $profile->DOB = $request->input('DOB');
        $profile->gender = $request->input('gender');
        $profile->featuredProfile = $request->input('featuredProfile');
        $profile->email = $request->input('email');
        $profile->phone = $request->input('phone');
        $profile->summary = $request->input('summary');
        $profile->profilePic = $request->input('profilePic');
        
        $profile->save();
         
        return redirect(route('allProfile'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $profile = Profile::find($id);
        $profile->delete();
         
        return redirect(route('allProfile'));
    }
}
