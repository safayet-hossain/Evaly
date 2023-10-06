<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Contracts\Providers\Auth;

class UsersController extends Controller
{
    public function registration(Request $request)
    {

        $validate=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6',

        ]);

        if($validate->fails()){
            return $this->responseWithError($validate->getMessageBag());
        }


    }
//     public function login(Request $request)
//     {
//         $validate=Validator::make($request->all(),[
//             'email'=>'required|email',
//             'password'=>'required|min:6',

//         ]);


//     //   if($validate->fails()){
//     //     return $this->responseWithError($validate->getMessageBag());
//     // }
//     $credentials = $request->only('email', 'password');
//     $token = Auth::guard('api')->attempt($credentials);

//     if($token)
//         {
//             //valid
//             return $this->responseWithSuccess($token,'Login Success');
//         }

//         //invalid
//         return $this->responseWithError('Invalid User.');
// }
}
