<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateBooksTable extends Controller
{	
	public function index(){
		$Books = Book::all();

		return view("Books.index",['books'=>$books]);
   	
   }
   public function insert(){
   	Return view("books.insert");
   }
   public function InsertBooks(Request $request){
   	$book= new Book();
   	$book->name = $request->name;
   	$book->gverdebi = $request ->gverdebi;
   	$book->stambia = $request ->stamba;
   	$book->fasi = $request ->fasi;

   	$book->save();

   	return view("books.insert");
   }
   public function edit($bookId){
   	$book = Book::Where("Id",$bookId)->first();
   	return view("books.edit",['Books'=>$book]);
   }
    public function editBooks(Request $request, $bookID) {
        $book = Book::where("id", $bookId)->first();

        $book->name = $request->name;
        $book->gverdebi = $request->gverdebi;
        $book->stambia = $request->stamba;
        $book->fasi = $request->fasi;

        $book->save();

        return view("books.edit", ['book' => $book]);
    }
     public function delete($bookID) {
        $book = Book::where("id", $BooksID)->delete();

        return back();
    }
}

