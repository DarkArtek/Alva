<?php

Route::group(['middleware' => [
    'api.auth'
]], function () {
    Route::get('/hello', 'ApiController@hello');
});
