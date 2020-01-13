<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use Illuminate\Contracts\Queue\ShouldQueue;

class InsideRegister extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
      public $firstname;
      public $lastname;
      public $catype;
      public $idnum;
      public $correspondence;
      public $email;
      public $mailaddress;
      public $telephone;
      public $whatsapp;
      public $schoolname;
      public $participants;
      public $productname;
      public $cert;
      public $medal;
      public $user;

    public function __construct(Request $request, $user)
    {
      $this->firstname = $request->firstname;
      $this->lastname = $request->lastname;
      $this->catype = $request->catype;
      $this->idnum = $request->idnum;
      $this->correspondence = $request->correspondence;
      $this->email = $request->email;
      $this->mailaddress = $request->mailaddress;
      $this->telephone = $request->telephone;
      $this->whatsapp = $request->whatsapp;
      $this->schoolname = $request->schoolname;
      $this->participants = $request->participants;
      $this->productname = $request->productname;
      $this->cert = $request->cert;
      $this->medal = $request->medal;
      $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('inside.register');
    }
}
