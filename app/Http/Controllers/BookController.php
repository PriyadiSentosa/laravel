<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\pengarang;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
      $buku = Book::all();
      $pengarang = Pengarang::all();
      return view('admin.books.index',compact('buku','pengarang'));

    }

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function create()
    {
        return view('admin.books.create');
    }

    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.books.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.books.edit', compact('id'));
    }


    public function destroy($id)
    {
        //
    }
}
