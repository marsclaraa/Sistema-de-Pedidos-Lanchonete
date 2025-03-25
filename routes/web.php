<?php

use App\Livewire\Create;
use Illuminate\Support\Facades\Route;

//cadastro do cliente
Route::get('/cliente/cadastro', Create::class)->name('cliente.cadastro');
