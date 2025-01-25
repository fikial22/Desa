<?php

namespace App\Filament\Resources\ModelDesaResource\Pages;

use App\Filament\Resources\ModelDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditModelDesa extends EditRecord
{
    protected static string $resource = ModelDesaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
