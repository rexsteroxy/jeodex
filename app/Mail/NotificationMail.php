<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
//use App\Models\User;
use App\Models\Package;

class NotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    //public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
            $this->tracking_id =$data['tracking_id'];
            $this->receiver_name =$data['receiver_name'];
            $this->receiver_email =$data['receiver_email'];
            $this->destination =$data['destination'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.notification')->with('tracking_id',$this->tracking_id)->with('receiver_name',$this->receiver_name)->with('receiver_email',$this->receiver_email)->with('destination',$this->destination);
    }
}
