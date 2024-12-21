<?php

namespace App\Filament\Resources\RoomFacilityResource\Pages;

use App\Filament\Resources\RoomFacilityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRoomFacility extends EditRecord
{
    protected static string $resource = RoomFacilityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
