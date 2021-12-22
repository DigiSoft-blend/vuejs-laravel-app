<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profile;
use App\Http\Requests\UserProfileRequest;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    // public function addBio(UserProfileRequest $request){
        
    //    $bio = $request->input('bio');
    //    $userP = new Profile;
    //    $userP->bio = $bio;
    //    $userP->user_id = Auth::user()->id;
        
    //    $userP->save();

    //    $response = [
    //     'message'=>'bio saved for '. Auth::user()->name,
    //    ];

    //    return response()->json( $response, 200);
    // }

    // public function deleteBio()
    // {
    //     $userP = new Profile;
    //     $userP->where('user_id', Auth::user()->id )->delete();

    //     return response()->json(['message' => 'Bio has been deleted'],200);
    // }
}
