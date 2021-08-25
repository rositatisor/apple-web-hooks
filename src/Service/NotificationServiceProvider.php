<?php

namespace App\Service;

class NotificationServiceProvider
{
    // priima request ir perduoda atitinkamam(?) Handler'iui (ApplePay, GooglePay...)
    // patikrina password ar matchina su secret set in Apple Pay -> CallBackFailedException?

    public function getRequest()
    {

    }
}