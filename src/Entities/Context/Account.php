<?php

namespace Savvy\Entities\Context;

class Account
{
    public string $name;
    public string $identifier;

    public ?array $attributes = null;

    function __construct(string $name, string $identifier, ?array $attributes = null)
    {
        $this->name = $name;
        $this->identifier = $identifier;
        $this->attributes = $attributes;
    }
}