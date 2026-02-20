<?php

namespace App\Filament\Resources\Clients\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ClientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make("Client Data")
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('client_name')
                            ->required(),
                        TextInput::make('shop_name')
                            ->required(),
                        TextInput::make('contact')
                            ->required(),
                        TextInput::make('email')
                            ->label('Email address')
                            ->email()
                            ->required(),
                        FileUpload::make('logo')
                            ->default(null),
                        Select::make('status')
                            ->required()
                            ->options([
                                "pending" => "Pending",
                                "approved" => "Approved",
                                "inactive" => "Inactive"
                            ]),
                        DatePicker::make('expiry_date')
                            ->default(null),
                    ])
            ]);
    }
}
