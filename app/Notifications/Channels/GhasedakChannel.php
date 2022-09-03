<?php

namespace App\Notifications\Channels;

use Ghasedak\GhasedakApi;
use Ghasedak\Exceptions\ApiException;
use Ghasedak\Exceptions\HttpException;
use Illuminate\Notifications\Notification;

class GhasedakChannel
{
    public function send($notifiable, Notification $notification)
    {
        if(! method_exists($notification , 'toGhasedakSms')) {
            throw new \Exception('toGhasedakSms not found');
        }

        $data = $notification->toGhasedakSms($notifiable);

        $message = $data['text'];
        $receptor = $data['number'];

        $apiKey = config('services.ghasedak.key');

        try
        {
            $lineNumber = "3000265757";
            $type = 1;
            $template = "verifyPhone";
            $api = new GhasedakApi($apiKey);
            $api->Verify($receptor,"otp", "$message");

            // $api->Verify($receptor,$type, "otp", "$message");
            // $api->SendSimple($receptor,$message,$lineNumber);
        }
        catch(ApiException $e){
            throw $e;
        }
        catch(HttpException $e){
            throw $e;
        }
    }
}
