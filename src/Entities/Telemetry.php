<?php

namespace Savvy\Entities;

use \Savvy\Entities\Context\Context;

class Telemetry
{
    public string $action;
    public ?array $attributes;
    public ?Context $context;

    function __construct(string $action, ?array $attributes = null, ?Context $context = null)
    {
        $this->action = $action;
        $this->attributes = $attributes;
        $this->context = $context;
    }
}