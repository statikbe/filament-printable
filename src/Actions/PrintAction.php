<?php

namespace Statik\FilamentPrintable\Actions;

use Filament\Actions\Action;

class PrintAction extends Action
{
    public static function getDefaultName(): ?string
    {
        return 'print';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this
            ->label(__('filament-printable::filament-printable.actions.print.label'))
            ->icon('heroicon-o-printer')
            ->color('gray')
            ->keyBindings(['mod+p'])
            ->actionJs('window.scrollTo({top:0,left:0,behavior:"smooth"}); setTimeout(() => window.print(), 100)');
    }
}
