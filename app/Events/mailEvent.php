<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\SenderModel;

class mailEvent{

    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $sender;

    public function __construct(SenderModel $sender){

        $this->sender = $sender;

    }

}
