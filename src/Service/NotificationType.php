<?php

namespace App\Service;

class NotificationType
{
    public const INITIAL_BUY = 'initial_buy';
    public const DID_RENEW = 'did_renew';
    public const DID_FAIL_TO_RENEW = 'did_fail_to_renew';
    public const CANCEL = 'cancel';
}