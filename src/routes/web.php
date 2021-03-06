<?php


Route::as(config('persian-workdays.as'))
    ->prefix(config('persian-workdays.prefix'))
    ->middleware(['web', config('persian-workdays.guard')])
    ->namespace('Persianworkdays\Http\Controllers')
    ->group(function () {
        Route::resource('holiday', 'HolidayController');
    });