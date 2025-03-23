<?php

namespace App\Events;
use App\Models\Theloai;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TheloaiCreated
{
    use InteractsWithSockets, SerializesModels;

    public $theloai;
    public function __construct(Theloai $theloai)
    {
        $this->theloai = $theloai;
    }
    public function broadcastOn()
    {
            return new Channel('theloais');
    }
    public function broadcastAs()
    {
        return ['theloai' => $this->theloai];
    }
}
