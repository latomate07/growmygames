<?php
namespace App\Repositories;

use App\Models\User;
use App\Notifications\ContactUsNotification;

class ContactUsRepository 
{
    /**
     * function send()
     */
    public function send($request, $to) {
        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "message" => $request->message
        ];
        
        $receiver = User::find($to);

        $receiver->notify(new ContactUsNotification($data));
    }
}