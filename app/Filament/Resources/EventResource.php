<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Event;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\EventResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EventResource\RelationManagers;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('titulo')
                        ->label('Título Principal (Event)')
                        ->required()
                        ->maxLength(255),

                    Textarea::make('descripcion')
                        ->label('Descripcion')
                        ->required()
                        ->rows(3),

                    TextInput::make('categoria')
                        ->label('Categoría')
                        ->required()
                        ->maxLength(255),

                    DatePicker::make('fecha')
                        ->label('Fecha del Evento')
                        ->required(),

                    FileUpload::make('imagen')
                        ->label('file')
                       
                       
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('titulo')
                ->label('Título Principal')
                ->searchable()
                ->limit(30),
    
            TextColumn::make('descripcion')
                ->label('descripcion')
                ->searchable()
                ->limit(15),
    
            TextColumn::make('categoria')
                ->label('Categoría')
                ->badge()
                ->color('info'),
    
            TextColumn::make('fecha')
                ->label('Fecha')
                ->sortable(),
    
            ImageColumn::make('imagen')
                ->label('Imagen')
                ->circular(),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
