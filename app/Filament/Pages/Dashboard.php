<?php
 
namespace App\Filament\Pages;

use Filament\Actions\Action;

class Dashboard extends \Filament\Pages\Dashboard
{
    protected static ?string $title = 'Vet Homepage';

    protected function getHeaderWidgets(): array
    {
        return [
            //
        ];
    }

    protected function getFooterWidgets(): array
    {
        return [
            //
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('edit')
                ->action(fn () => true),
            Action::make('delete')
                ->requiresConfirmation()
                ->action(fn () => true),
        ];
    }
}