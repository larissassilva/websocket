<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;


class EnviarNotificacao implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $mensagem;
    /**
     * Create a new event instance.
     *@param string $mensagem
     */
    public function __construct()
    {
        //
       // $this->mensagem = $mensagem;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('canal-mensagem');
    }

    public function broadcastWith() {
        return [ "title" => 'Essa é uma notificação da página mensagem!'];

    }

    public function broadcastAs()
    {
        return 'EnviarNotificacao'; // Nome do evento
    }
}
