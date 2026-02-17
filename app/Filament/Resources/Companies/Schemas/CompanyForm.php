<?php

namespace App\Filament\Resources\Companies\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CompanyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('address')
                    ->required(),
                FileUpload::make('logo')
                    ->required(),
                Textarea::make('play_store_link')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('ios_link')
                    ->default(null)
                    ->columnSpanFull(),
                RichEditor::make('policy')
                    ->required()
                    ->extraAttributes([
                        'style' => 'min-height: 250px;',
                    ])
                    ->columnSpanFull(),
                RichEditor::make('how_to_order')
                    ->required()
                    ->extraAttributes([
                        'style' => 'min-height: 250px;',
                    ])
                    ->columnSpanFull(),
                RichEditor::make('terms')
                    ->required()
                    ->extraAttributes([
                        'style' => 'min-height: 250px;',
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
