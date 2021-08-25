<?php

namespace App\Service;

use App\Event\SubscriptionCancel;
use App\Event\SubscriptionFailToRenew;
use App\Event\SubscriptionInitialBuy;
use App\Event\SubscriptionRenew;
use App\Exception\NotValidNotificationTypeException;
use Psr\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;

class AppleCallbackHandler implements CallbackHandler
{
    private EventDispatcherInterface $dispatcher;

    public function __construct(EventDispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function createFromRequest(Request $request): void
    {
        $instance = new Transaction(); // maybe assign to self? //generic notification aka transaction
        $instance->setautoRenewAdamId($request->get('auto_renew_adam_id'));
        $instance->setNotificationType($request->get('notification_type'));
        $event = $this->sendEventByNotificationType($request->get('notification_type'), $instance);
        $instance->setPassword($request->get('password'));
        $this->dispatcher->dispatch($event);
    }

    public function sendEventByNotificationType(string $notificationType, Transaction $transaction)
    {
        switch ($notificationType) {
            case NotificationType::INITIAL_BUY:
                return new SubscriptionInitialBuy($transaction);
            case NotificationType::DID_RENEW:
                return SubscriptionRenew::class;
            case NotificationType::DID_FAIL_TO_RENEW:
                return SubscriptionFailToRenew::class;
            case NotificationType::CANCEL:
                return SubscriptionCancel::class;
            default:
                throw new NotValidNotificationTypeException('Not valid notification type.');
        }
    }

}