<?php
declare(strict_types=1);

/*
 * テスト用のルーティング
 */
Route::group(
    ['prefix' => 'testing', 'namespace' => 'Testing'],
    function () {
        Route::get('/', 'IndexController@index')->name('testing.index.index');
    }
);
