<?php

namespace App\EventSubscriber;

use App\Event\SubscriptionRenew;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class RenewSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            SubscriptionRenew::class => 'renewSubscription',
        ];
    }

    public function renewSubscription()
    {

    }
}