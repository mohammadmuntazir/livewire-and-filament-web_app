<?php

namespace App\Filament\Resources\CategoryResource\Pages;
use Filament\Notifications\Notification;
use App\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategory extends EditRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    
    protected function getSavedNotification(): ?Notification{
        return Notification::make()
        ->success()
        ->title('Category Updated')
        ->body('Category updated successfully.');
    }
}
