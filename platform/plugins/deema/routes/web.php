<?php

use Botble\Base\Facades\AdminHelper;
use Botble\Deema\Http\Controllers\DeemaController;
use Illuminate\Support\Facades\Route;

Route::group(['controller' => DeemaController::class, 'middleware' => ['web', 'core']], function (): void {
    Route::get('payment/deema/callback', 'callback')->name('payments.deema.callback');
});

