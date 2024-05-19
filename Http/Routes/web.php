<?php

Route::get('/discord/oauth', [\Modules\Alva\Http\Controllers\Frontend\DiscordController::class, 'login']);
Route::get('/discord/unlink', [\Modules\Alva\Http\Controllers\Frontend\DiscordController::class, 'unlink']);


