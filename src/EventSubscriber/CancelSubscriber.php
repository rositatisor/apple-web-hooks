<?php

namespace App\EventSubscriber;

use App\Event\SubscriptionCancel;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class CancelSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            SubscriptionCancel::class => 'cancelSubscription',
        ];
    }

    public function cancelSubscription()
    {
        
    }
}