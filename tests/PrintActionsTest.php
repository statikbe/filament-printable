<?php

use Statik\FilamentPrintable\Actions\PrintAction;

it('can create a print action', function () {
    $action = PrintAction::make();

    expect($action->getName())->toBe('print')
        ->and($action->getLabel())->toBe('Print')
        ->and($action->getIcon())->toBe('heroicon-o-printer')
        ->and($action->getColor())->toBe('gray');
});

it('uses actionJs for window.print', function () {
    $action = PrintAction::make();

    expect($action->getCustomAlpineClickHandler())->toContain('window.print()');
});
