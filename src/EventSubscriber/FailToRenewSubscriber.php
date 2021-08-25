<?php

namespace App\EventSubscriber;

use App\Event\SubscriptionFailToRenew;
use App\Event\SubscriptionRenew;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class FailToRenewSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            SubscriptionFailToRenew::class => 'processFailedRenew',
        ];
    }

    public function processFailedRenew()
    {
        
    }
}