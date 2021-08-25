<?php

namespace App\Controller;

use App\Factory\CallbackHandlerFactory;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class CallbackController
{
    private CallbackHandlerFactory $call;

    public function __construct(CallbackHandlerFactory $call)
    {
        $this->call = $call;
    }

    // api/payments/callbacks/{apple}
    public function process(Request $request): JsonResponse
    {
        $provider = $request->get('provider');

        $this->call->build($provider)->createFromRequest($request);

        return new JsonResponse();

    }
}