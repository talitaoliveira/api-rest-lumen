<?php

namespace App\Http\Controllers;

use App\Books;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BooksController extends Controller {

    /**
     * Display a listing of the resource
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $books = Books::all();
        return response()->json($books);
    }

    public function view($id){

        $book = Books::where('id', $id)->get();
        
        return response()->json($book);
    }

    public function store(Request $request) {

    }

    public function update(Request $request, $id) {

    }

}