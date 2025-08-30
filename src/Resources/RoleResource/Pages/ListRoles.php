<?php

namespace NinjaPortal\FilamentShield\Resources\RoleResource\Pages;

use Filament\Actions\CreateAction;
use NinjaPortal\FilamentShield\Resources\RoleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRoles extends ListRecords
{
    protected static string $resource = RoleResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
