<?php

use App\Http\Controllers\DhamContoller;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainContoller;
use App\Http\Middleware\name;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::prefix("admin")->middleware("auth")->group(function(){
    Route::get("/",[HomeContoller::class,'dashboard'])->name("/");

    // dham
    Route::get("dham_list",[DhamContoller::class,'list_dham'])->name("dham.list");
    Route::get('add_dham',[DhamContoller::class,'show_dham'])->name('add.dham');
    Route::post('add_dham',[DhamContoller::class,'store_dham'])->name('dham.store');
    Route::get('dham_edit',[DhamContoller::class,'edit_dham'])->name('edit.dham');
    Route::post('dham_update',[DhamContoller::class,'edit_dham_update'])->name('edit.dham.update');
    Route::get('delete_dham',[DhamContoller::class,'delete_dham'])->name('delete.dham');

    // dham end

    // train
    Route::get('train_list',[TrainContoller::class,'index'])->name('train.list');
    Route::get('add_train',[TrainContoller::class,'show_add_page'])->name('train.add');



});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
