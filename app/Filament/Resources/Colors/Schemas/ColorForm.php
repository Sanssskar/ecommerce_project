<?php

namespace App\Filament\Resources\Colors\Schemas;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ColorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ColorPicker::make('primary_color')
                    ->required(),
                ColorPicker::make('secondary_color')
                    ->required(),
                ColorPicker::make('text_color')
                    ->required(),
                ColorPicker::make('bg_color')
                    ->required(),
            ]);
    }
}
