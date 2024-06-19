<?php

use Illuminate\Support\Facades\Route;

Route::get('/task', function () {
    return "task desde task.php";
});
Route::get('/hello', function () {
    return "HOLA EL RINCON DE ISMA";
});