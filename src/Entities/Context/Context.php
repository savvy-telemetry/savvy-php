<?php

namespace Savvy\Entities\Context;

class Context
{
    public string $name;
    public string $identifier;
    public string $type;

    public ?array $attributes = null;

    function __construct(string $name, string $identifier, string $type, ?array $attributes = null)
    {
        $this->name = $name;
        $this->identifier = $identifier;
        $this->type = $type;
        $this->attributes = $attributes;
    }
}