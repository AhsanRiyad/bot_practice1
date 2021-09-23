<?php

namespace App\Http\Controllers;

use pimax\FbBotApp;

use pimax\Messages\Message;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;


class MessengerController extends Controller
{
    //

    public function webhook()
    {

        $local_verify_token = env('WEBHOOK_VERIFY_TOKEN');
        $hub_verify_token = \Input::get('hub_verify_token');

        if ($local_verify_token == $hub_verify_token) {
            return \Input::get('hub_challenge');
        } else {
            return 'testing controller';
        }
    }

    public function webhook_post()
    {

        \Log::info('post received from facebook');
    }
}
