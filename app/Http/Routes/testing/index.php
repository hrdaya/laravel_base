<?php

/*
 * テスト用のルーティング
 */
Route::group(
    ['prefix' => 'testing', 'namespace' => 'Testing'],
    function () {
        Route::get('/', 'IndexController@index')->name('testing.index.index');
    }
);
