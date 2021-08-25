<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Request;

interface CallbackHandler
{
    public function createFromRequest(Request $request): void;
}