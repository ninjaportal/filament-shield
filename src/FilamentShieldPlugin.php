<?php

declare(strict_types=1);

namespace NinjaPortal\FilamentShield;

use NinjaPortal\FilamentShield\Concerns\CanCustomizeColumns;
use NinjaPortal\FilamentShield\Concerns\CanLocalizePermissionLabels;
use NinjaPortal\FilamentShield\Concerns\HasSimpleResourcePermissionView;
use NinjaPortal\FilamentShield\Resources\RoleResource;
use \Closure;
use NinjaPortal\FilamentShield\Support\Utils;
use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentShieldPlugin implements Plugin
{
    use CanCustomizeColumns;
    use CanLocalizePermissionLabels;
    use HasSimpleResourcePermissionView;

    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'filament-shield';
    }

    public function register(Panel $panel): void
    {
        if (! Utils::isResourcePublished()) {
            $panel->resources([
                RoleResource::class,
            ]);
        }
    }

    public static function setNavigationGroup(string $group) : void
    {
        config([
            'filament-shield.navigation_group' => $group,
        ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
