<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ModelDesaResource\Pages;
use App\Filament\Resources\ModelDesaResource\RelationManagers;
use App\Models\Model_Desa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ModelDesaResource extends Resource
{
    protected static ?string $model = Model_Desa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_desa'),
                Forms\Components\TextInput::make('kode_desa'),
                Forms\Components\TextInput::make('kecamatan'),
                Forms\Components\TextInput::make('kabupaten'),
                Forms\Components\TextInput::make('provinsi'),
                Forms\Components\TextInput::make('visi'),
                Forms\Components\TextInput::make('misi'),
                Forms\Components\TextInput::make('sejarah'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_desa'),
                Tables\Columns\TextColumn::make('kode_desa'),
                Tables\Columns\TextColumn::make('kecamatan'),
                Tables\Columns\TextColumn::make('kabupaten'),
                Tables\Columns\TextColumn::make('provinsi'),
                Tables\Columns\TextColumn::make('visi'),
                Tables\Columns\TextColumn::make('misi'),
                Tables\Columns\TextColumn::make('sejarah'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListModelDesas::route('/'),
            'create' => Pages\CreateModelDesa::route('/create'),
            'edit' => Pages\EditModelDesa::route('/{record}/edit'),
        ];
    }
}
