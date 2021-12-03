<?php

namespace App\Listeners;

use App\Events\mailEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailClass;


class mailListener{

    public function handle(mailEvent $event){

      $name = $event->sender['name'];
      $email = $event->sender['email'];
      Mail::to($email)->send(new MailClass($name, $email));

    }
}
