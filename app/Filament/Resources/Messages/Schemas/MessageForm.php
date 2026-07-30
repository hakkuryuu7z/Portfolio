<?php

namespace App\Filament\Resources\Messages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class MessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('sender_name')
                    ->required(),
                TextInput::make('sender_email')
                    ->email()
                    ->required(),
                Textarea::make('message_content')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
