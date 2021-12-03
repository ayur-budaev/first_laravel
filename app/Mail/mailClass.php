<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class mailClass extends Mailable{

    use Queueable, SerializesModels;

    protected $name;
    protected $email;

    public function __construct($name, $email){

      $this->name = $name;
      $this->email = $email;
    }

    public function build(){

      return $this->view('mail')->with([
        'name' => $this->name,
        'email' => $this->email
        ])->subject('Спасибо за участие в нашей конференции');
    }
}
