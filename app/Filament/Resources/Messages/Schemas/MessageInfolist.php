<?php

namespace App\Filament\Resources\Messages\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MessageInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('sender_name'),
                TextEntry::make('sender_email'),
                TextEntry::make('message_content')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->dateTime(),
            ]);
    }
}
