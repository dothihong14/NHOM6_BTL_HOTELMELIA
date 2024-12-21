<?php

namespace App\Filament\Resources\RoomFacilityResource\Pages;

use App\Filament\Resources\RoomFacilityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRoomFacilities extends ListRecords
{
    protected static string $resource = RoomFacilityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
