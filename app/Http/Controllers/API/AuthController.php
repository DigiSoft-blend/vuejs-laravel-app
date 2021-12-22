<?php

/**
 * Dated : 22/21/2021
 *
 * This is an Auth Profile Controller: in use: serves as reference code for future projects
 * 
 * @author   Silas Udofia <Silas@Verixon.com>
 */

namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\RefreshToken;
use Laravel\Passport\Token;
use DB;
use App\Http\Requests\RegisterRequest;
   
class AuthController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
   
        if($validator->fails()){      
            return response()->json([$validator->errors()->all()], 422); 
        }
   
        $user_credentials = $request->all();

        $user_credentials['password'] = Hash::make($user_credentials['password']);

        $user = User::create($user_credentials);

        $response = [
             'success' => true,
             'token' => $user->createToken('Laravel Password Grant Client')->accessToken,
             'name' => $user->name . " Registered successfully"
        ];
         
        return response()->json($response, 200);
    }
   
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $user_login_credentials = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($user_login_credentials)){ 
 
            $user = Auth::user(); 

            $response = [
                'success' => true,
                'notification' => 'loged in successfully',
                'name' => $user,
                'token' => $user->createToken('MyApp')->accessToken,
            ];
        
           return response()->json($response, 200);
        }

        $response = [
            'success' => false,
            'notification' => 'Invalid login credentials',
        ];

        return response()->json($response, 401);
    }


    public function logout()
    {
        $token = Auth::user()->token();
        $token->revoke();
        DB::table('oauth_access_tokens')->where('user_id', $user->id)->delete();

        $response = [
            'notification' => 'You are logged out successfully',
        ];

        return Response()->json($response, 200);
    }
    

    public function logout_all()
    {
        $user = Auth::user();
        $tokens = $user->tokens->pluck('id');
        Token::whereIn('id', $tokens)->update(['revoked'=> true]);
        RefreshToken::whereIn('access_token_id', $tokens)->update(['revoked' => true]);

        DB::table('oauth_access_tokens')->where('user_id', $user->id)->delete();

        $response = [
            'notification' => 'You are logged out successfully',
        ];

        return Response()->json($response, 200);
    }
}