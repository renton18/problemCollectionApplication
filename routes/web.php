<?php

use App\Models\problem;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'problem'], function () {
    //一覧
    Route::get('/', 'problemController@index')->name('problem.index');
    //詳細
    Route::get('show/{problem}/', function (problem $problem) {
        return view('problem/show', ['problem' => $problem]);
    })->name('problem.show');
    //新規作成
    Route::view('create', 'problem/create/index')->name('problem.create');
    Route::patch('create', 'problemController@create')->name('problem.create');
    Route::post('create', 'problemController@store')->name('problem.create');
    //編集
    Route::get('edit/{problem}/', function (problem $problem) {
        return view('problem/edit/index', [ 'problem' => $problem]);
    })->name('problem.edit');
    Route::patch('edit/{problem}/', 'problemController@edit')->name('problem.edit');
    Route::post('edit/{problem}/', 'problemController@update')->name('problem.edit');
    //削除
    // Route::post('delete/{problem}/', 'problemController@destroy')->name('problem.delete');
    Route::post('delete/{problem}/', function (problem $problem) {
        $problem->delete();
        return redirect()->to('problem');
    })->name('problem.delete');
});
