<?php

namespace App\Filament\Resources\SocialLinks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SocialLinkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Textarea::make('icon')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('link')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
