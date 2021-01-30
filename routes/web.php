<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CreateBooksTable;

use App\Http\Controllers\CreateBookshopTable;


Route::get('/', function () {
    return view('welcome');
});



Route::get("/Books", "App\Http\Controllers\CreateBooksTable@index");


Route::get("/BooksInsert", "App\Http\Controllers\CreateBooksTable@insert");

Route::post("/BooksInsert", "App\Http\Controllers\CreateBooksTable@Insertflights");

Route::get("/BooksEdit/{BooksID}", "App\Http\Controllers\CreateBooksTable@edit");

Route::post("/BooksEdit/{BooksID}", "App\Http\Controllers\CreateBooksTable@editFlights");



Route::get("/BooksDelete/{BooksID}", "App\Http\Controllers\CreateBooksTable@delete");




Route::get("/Bookshop", "App\Http\Controllers\CreateBookshopTable@index");


Route::get("/BookshopInsert", "App\Http\Controllers\CreateBookshopTable@insert");

Route::post("/BookshopInsert", "App\Http\Controllers\CreateBookshopTable@Insertairports");

Route::get("/BookshopEdit/{BookshopID}", "App\Http\Controllers\CreateBookshopTable@edit");

Route::post("/BookshopEdit/{BookshopID}", "App\Http\Controllers\CreateBookshopTable@editAirports");



Route::get("/BookshopDelete/{BookshopID}", "App\Http\Controllers\CreateBookshopTable@delete");