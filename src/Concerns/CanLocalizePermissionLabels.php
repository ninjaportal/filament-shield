<?php

declare(strict_types=1);

namespace NinjaPortal\FilamentShield\Concerns;

trait CanLocalizePermissionLabels
{
    protected bool $arePermissionLabelsLocalized = true;

    public function localizePermissionLabels(bool $condition = true): static
    {
        $this->arePermissionLabelsLocalized = $condition;

        return $this;
    }

    public function hasLocalizedPermissionLabels(): bool
    {
        return $this->arePermissionLabelsLocalized;
    }
}
