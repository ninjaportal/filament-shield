<?php

declare(strict_types=1);

namespace NinjaPortal\FilamentShield\Contracts;

interface HasShieldPermissions
{
    public static function getPermissionPrefixes(): array;
}
