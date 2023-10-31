<?php

namespace Savvy\Entities\Context;

class Attribute
{
    public string $key;
    public array $value = [];

    function __construct(string $key, array $value)
    {
        $this->key = $key;
        $this->value = $value;
    }
}