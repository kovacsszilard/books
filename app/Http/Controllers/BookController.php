<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Book::all();
    }
    public function indexByCat($catId)
    {
        return Book::all()->where('category_id', $catId);
//        return Category;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TODO Kötelezö mezőellenőrzés(Pál)
        $rec = new Book();
        $rec->title = $request->title;
        $rec->author = $request->author;
        $rec->category = $request->category;
        $rec->piece = $request->piece;
        $rec->save();
        return $rec;
    }

    public function show($id)
    {
        return Book::find($id);
    }

    public function update(Request $request, $id)
    {
        $rec = Book::find($id);
        $rec->title = $request->title;
        $rec->author = $request->author;
        $rec->category = $request->category;
        $rec->piece = $request->piece;
        $rec->save();
        return $rec;
    }


    public function destroy($id)
    {
        $rec = Book::destroy($id);
        return $rec;
    }
}
