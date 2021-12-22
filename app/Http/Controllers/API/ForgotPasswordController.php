<?php

/**
 * Dated : 22/21/2021
 *
 * This is a User Profile Controller: not in use: serves as reference code for future projects
 * 
 * @author   Silas Udofia <Silas@Verixon.com>
 */

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\ResetRequest;
use App\User;
use Str;
use DB;
use Mail;
use Illuminate\Support\Facades\Hash;


class ForgotPasswordController extends Controller
{
    // public function forgot(ForgotPasswordRequest $request)
    // {
       
    //     $email = $request->input('email');

    //     if(User::where('email', $email)->doesntExist())
    //     {
    //         $response = [
    //             'message' => 'User doesnt\'t exist'
    //         ];
    //         return response()->json($response, 404);
    //     }

    //     $token = Str::random(10);

    //    try{

    //     DB::table('password_resets')->insert([
    //        'email' => $email,
    //        'token' => $token
    //     ]);
        
    //     Mail::send('Mails.forgot', ['token' => $token], function($message) use($email){
    //         $message->to($email);
    //         $message->subject('reset your password');
    //     });

    //     return response()->json(['messsage'=>'check your email'], 200);

    //    }catch(\Exception $exception){
    //      return response()->json(['message' => $exception->getMessage()],400);
    //    }
    // }

    // public function reset(ResetRequest $request)
    // {
    //     $token = $request->input('token');

    //     if(!$passwordReset = DB::table('password_resets')->where('token', $token)->first()){
    //        return response()->json(['message' => 'Invalid token'],400);
    //     }

    //     /** @var User $user */

    //     if(!$user = User::where('email' , $passwordReset->email)->first()){
    //        return response()->json(['message' => 'Invalid User'],404);
    //     }

    //     $user->password = Hash::make($request->input('password'));
    //     $user->save();

    //     DB::table('password_resets')->where('email', $user->email )->delete();

    //     return response()->json(['message'=> 'Success'], 200);
    // }
}
