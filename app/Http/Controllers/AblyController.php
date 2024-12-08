<?php

namespace App\Http\Controllers;

use Ably\AblyRest;
use Illuminate\Http\Request;

class AblyController extends Controller
{
    protected AblyRest $ably;
    
    public function __construct()
    {
        $this->ably = new AblyRest(env('ABLY_KEY'));
    }

    public function trigger(){
        $channel = $this->ably->channels->get('inw');
        $channel->publish('Okaerinasai');
    }

    public function auth(){
        $tokenParams = [
            'clientId'=> "1"
        ];

        $tokenInfo = $this
            ->ably
            ->auth
        ->requestToken($tokenParams); 
        return response()->json($tokenInfo);
    }
}
