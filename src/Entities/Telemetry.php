<?php

namespace Savvy\Entities;

use \Savvy\Entities\Context\Context;

class Telemetry
{
    public string $action;
    public ?array $attributes;
    public ?array $contexts;

    function __construct(string $action, ?array $attributes = null, ?array $contexts = null)
    {
        $this->action = $action;
        $this->attributes = $attributes;
        $this->contexts = $contexts;
    }
}