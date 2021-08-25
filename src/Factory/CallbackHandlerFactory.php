<?php

namespace App\Factory;

use App\Exception\NotFoundCallbackHandlerException;
use App\Service\AppleCallbackHandler;
use App\Service\CallbackHandler;

class CallbackHandlerFactory
{
    private AppleCallbackHandler $appleCallbackHandler;

    // tagged services
    public function __construct(AppleCallbackHandler $appleCallbackHandler)
    {
        $this->appleCallbackHandler = $appleCallbackHandler;
    }

    public function build(string $provider): CallbackHandler
    {
        if($provider === 'apple') {
            return $this->appleCallbackHandler;
        }

        throw new NotFoundCallbackHandlerException('Not found Callback Handler.');
    }

}