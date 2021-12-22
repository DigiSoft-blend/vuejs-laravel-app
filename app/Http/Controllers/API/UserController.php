<?php

/**
 * Dated : 22/21/2021
 *
 * This is a User Controller: not in use: serves as reference code for future projects
 * 
 * @author   Silas Udofia <Silas@Verixon.com>
 */

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\User as UserResource;


class UserController extends Controller
{
    public function index()
    {
        // $users = User::all();
        
        // $response = [
        //    'notification' => 'Users retirieved succesfully',
        //    'users' => UserResource::collection($users)
        // ];
        // return Response()->json($response, 200);
    }
}
