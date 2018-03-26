<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Book;

class AdminLTEController extends Controller
{
	public function dashboard() {

		//$books = Book::all();
		//return view('admin.home', compact('books'));
		return view('admin.home');
	} 
}
