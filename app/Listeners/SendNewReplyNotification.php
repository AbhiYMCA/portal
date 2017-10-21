<?php

namespace App\Listeners;

use App\Events\ReplyWasCreated;
use App\Models\Subscription;
use App\Notifications\NewReply;

class SendNewReplyNotification
{
    public function handle(ReplyWasCreated $event)
    {
        collect($event->reply->replyAble()->subscriptions())
            ->each(function (Subscription $subscription) {
                $subscription->user()->notify(new NewReply());
            });
    }
}
