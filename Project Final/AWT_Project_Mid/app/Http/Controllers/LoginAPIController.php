<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Token;
use Illuminate\Support\Str;
use DateTime;

class LoginAPIController extends Controller
{
    public function login(Request $req)
    {
        $c = Seller::where('id', $req->id)
            ->where('s_password', md5($req->s_password))
            ->where('s_approve', "no")
            ->first();

        if ($c) {
            $api_token = Str::random(64);
            $token = new Token();
            $token->user_id = $c->id;
            $token->token = $api_token;
            $token->created_at = new DateTime();
            $token->save();
            return $token;
        }
    }

    public function logout(Request $req)
    {
        // echo $req->userId;
        $token = Token::where('token', $req->Token)->first();
        // return $
        // $token->Id=$token->Id;
        // $token->user_id=$token->user_id;
        // $token->Token=$req->Token;
        // $token->created_at=$token->created_at;
        $token->expired_at = new DateTime();
        $token->save();
        return $token;
    }
}
