<?php

test('Route doc page', function ($route) {
    $this->get(route($route))
        ->assertOK();
})->with([
    ['docs'],
    ['docs.get-started'],
    ['docs.heroicons'],
    ['docs.notifications'],
    ['docs.hooks'],
    ['docs.inputs'],
    ['docs.errors'],
    ['docs.maskable-inputs'],
    ['docs.phone-input'],
    ['docs.buttons'],
    ['docs.currency-input'],
    ['docs.dropdown'],
    ['docs.datetime-picker'],
    ['docs.time-picker'],
    ['docs.cards'],
    ['docs.native-select'],
    ['docs.select'],
    ['docs.toggle'],
    ['docs.checkbox'],
    ['docs.radio'],
    ['docs.modal'],
    ['docs.dialogs'],
    ['docs.textarea'],
    ['docs.changelog'],
    ['docs.colors'],
    ['docs.customization'],
    ['docs.contributing'],
]);