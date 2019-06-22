<?php

namespace App\Http\Controllers\Traits;
use Pusher\Pusher;
use Illuminate\Http\Request;
use App\notify;
trait NotificationScopes
{
    public function getSendMessage($target , $title, $message)
    {
        $data['title'] = $title;
        $data['content'] = $message;
        $data['target'] = $target;
        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );
        $notify = new notify ([
            'title' => $title,
            'content' => $message,
            'target' => $target
        ]);
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );
        $pusher->trigger('Notify', 'send-message', $data);
        if($notify !== null){
            $notify->save();
        }
    }
    public function pushMessage($target , $title, $message)
    {
        if(! Gate::allows(config('constants.USER_PERMISSIOn'))){
            return abort(401);
        }else{
            $data['title'] = $title;
            $data['content'] = $message;
            $data['target'] = $target;

            $options = array(
                'cluster' => 'ap1',
                'encrypted' => true
            );
            $pusher = new Pusher(
                env('PUSHER_APP_KEY'),
                env('PUSHER_APP_SECRET'),
                env('PUSHER_APP_ID'),
                $options
            );
            $pusher->trigger('Notify', 'send-message', $data);
        }

    }
}