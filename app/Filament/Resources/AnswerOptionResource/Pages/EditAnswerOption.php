<?php

namespace App\Filament\Resources\AnswerOptionResource\Pages;

use App\Filament\Resources\AnswerOptionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnswerOption extends EditRecord
{
    protected static string $resource = AnswerOptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
