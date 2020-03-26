<?php


namespace App\Listeners;
use App\Events\UserAdded;
use Illuminate\Contracts\Queue\ShouldQueue;


class UserEventSubscriber
{
    public function handleSendMsg(UserAdded $event){

        echo $event->user->username .'\r';
    }

    public function handleSendEmail(UserAdded $event){

        echo $event->user->usercode;
    }

    public function subscribe($events){

        $events->listen(
            UserAdded::class,
            'App\Listeners\UserEventSubscriber@handleSendMsg'
        );
        $events->listen(
            UserAdded::class,
            'App\Listeners\UserEventSubscriber@handleSendEmail'
        );
    }


}
