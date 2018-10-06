<?php

namespace App\Http\Controllers;
use App\Profile;
use DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{    
    function store(Request $request){
       
       $profile = new Profile();
        $profile->fullname=$request->get('name');
        $profile->age= $request->get('age');
        $profile->photo= $request->get('photo');
    
        $profile->save();
        return response()->json('Successfully added');
     }
    function allProfiles(){
        $profiles=DB::table('profiles')
                    ->orderBy('id', 'desc')
                    //->paginate(5);
                    ->get();
       return response()->json($profiles);
    }
    public function getProfile($id){
        $profile= DB::table('profiles')->where('id',$id)->get();
        return response()->json($profile);

    }
    function updateProfile(Request $request){
      
        $profile = Profile::find($request->get('id'));
   
    $profile->update($request->all());
    return response()->json($profile);
    }
    public function deleteProfile($id){
        Profile::where('id',$id)->delete();
        $response=array('response'=>'profile delete');
        return $response;
    }
}
