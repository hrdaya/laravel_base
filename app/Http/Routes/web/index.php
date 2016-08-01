<?php
/**
 * Indexフォルダ内のルーティング
 * nameには[モジュール.コントローラ.アクション]といった名前を付けること.
 */
Route::group(
    ['namespace' => 'Index'],
    function () {
        Route::get('/', 'IndexController@index')->name('index.index.index');
    }
);
