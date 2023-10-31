<?php

namespace Savvy\Entities\Context;


class Context
{
    public ?Account $account;
    public ?User $user;
    
    function __construct(?Account $account = null, ?User $user = null)
    {
        $this->account = $account;
        $this->user = $user;
    }
}