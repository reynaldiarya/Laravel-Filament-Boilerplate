<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextEntry::make('name'),
                                TextEntry::make('email'),
                                TextEntry::make('roles.name')
                                    ->badge()
                                    ->color('primary')
                                    ->separator(', '),
                                TextEntry::make('updated_at')
                                    ->dateTime('d M Y H:i'),
                                TextEntry::make('created_at')
                                    ->dateTime('d M Y H:i'),
                                TextEntry::make('email_verified_at')
                                    ->dateTime('d M Y H:i'),
                            ]),
                    ]),
            ])->columns(1);
    }
}
