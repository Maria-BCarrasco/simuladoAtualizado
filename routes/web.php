<?php

use App\Livewire\ProdutoCreate;
use App\Livewire\ProdutoEdit;
use App\Livewire\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('/produto', ProdutoCreate::class);
Route::get('/edit', ProdutoEdit::class);
Route::get('/index', ProdutoIndex::class);