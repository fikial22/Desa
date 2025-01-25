<?php

namespace App\Filament\Resources\ModelDesaResource\Pages;

use App\Filament\Resources\ModelDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListModelDesas extends ListRecords
{
    protected static string $resource = ModelDesaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
