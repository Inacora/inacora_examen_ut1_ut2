<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    $messages = \App\Models\Message::all();
    return view('messages', ['messages' => $messages]);
})->name('messages.show');

// Rutas para editar y actualizar los mensajes

Route::get("/messages/{id}/editar", [MessageController::class, 'editMessage'])->name('message.edit');
Route::put("/messages/{id}", [MessageController::class, 'updateMessage'])->name('message.update');

// Mostrar los errores 

Route::get("/errores", [MessageController::class, 'showErrors'])->name('message.errors');