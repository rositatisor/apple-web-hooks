<?php

namespace App\EventSubscriber;

use App\Event\SubscriptionInitialBuy;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class InitialBuySubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            SubscriptionInitialBuy::class => 'subscribe',
        ];
    }

    public function subscribe()
    {

    }
}