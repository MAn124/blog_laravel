<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


final class UserRoleEnum extends Enum
{
    public const ADMIN = 0;
    public const SUPERDMIN = 2;
    public const USER = 1;
}
