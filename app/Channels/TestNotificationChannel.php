<?php

namespace App\Channels;

use App\User;
use Illuminate\Notifications\Notification;

class TestNotificationChannel
{
    /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toMessage($notifiable);

        $mobile=$notifiable->mobile;
        $result = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9409713120&Password=".urlencode('chirag@123')."&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=chirayjLwSZRanvdBMFmshfpoKW7YC") ,true);
        if ($json["status"]==="success") {
            echo $json["msg"];
            //your code when send success
        }else{
            echo $json["msg"];
            //your code when not send
        }

    }
}
