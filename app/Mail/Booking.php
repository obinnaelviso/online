<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use Illuminate\Contracts\Queue\ShouldQueue;

class Booking extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
      public $booking_type;
      public $firstname;
      public $lastname;
      public $user_type;
      public $idnum;
      public $email;
      public $hours;
      public $date_time;
      public $purpose;
      public $users_count;
      public $subject;

    public function __construct(Request $request, $booking_type)
    {
        $this->subject = "New ".$booking_type." booking.";
        $this->booking_type = $booking_type;
        $this->firstname = $request->firstname;
        $this->lastname = $request->lastname;
        $this->user_type = $request->user_type;
        $this->idnum = $request->idnum;
        $this->email = $request->email;
        $this->hours = $request->hours;
        $this->date_time = $request->date_time;
        $this->purpose = $request->purpose;
        $this->users_count = $request->users_count;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('booking');
    }
}
