<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Http\Requests\StorebookRequest;
use App\Http\Requests\UpdatebookRequest;
use GuzzleHttp\Psr7\Request;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booklist = book::all();
        return view("list",["books"=>$booklist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebookRequest $request)
    {
        
        // $take = $request->book::all();
        // $take->id_book
        $request->validate([
            'id_book' => 'required',
            'title_book' => 'required',
            'writer_book' => 'required',
            'year_book' => 'required',
            'publisher_book' => 'required',
            'synopsis' => 'required'
        ]);
    

        $input = $request->all();
        $book = book::create($input);
        // return back()->with('success','Berhasil menambahkan Buku.');
        return redirect('/')->with('Success', 'Data has been uploaded.');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id_book)
    {
        $book = book::find($id_book);
        return view('detail', ['book'=>$book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id_book)
    {
        $book = book::find($id_book);
        return view('edit', ['book'=>$book]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebookRequest  $request
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebookRequest $request, book $id_book)
    {
        // $request->validate([
        //     'id_book' => 'required'
        // ]);
        // $books = book::find($id_book)->update($request->all());
        // book::findOrFail($id_book)->first()->fill($request->all())->save();
        // $book = book::find($id_book)->update($request->all());
        // $book = book::find($id_book);
        // $book->update($request->all());
        // $affected = DB::table('books')
        //       ->where('id_book', $id_book)
        //       ->update($request->except(['_token','_method']));
        return redirect('list')->with('success', ' Data has been updated.');
    }

    public function updateBook(UpdatebookRequest $request, $id_book)
    {
        $request->validate([
            'id_book' => 'required'
        ]);
        $book = book::find($id_book)->update($request->all());
        return redirect('list')->with('success', ' Data has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $id_book)
    {
        $book = book::find($id_book);
        $book->each->delete();
        return back()->with('Success', 'Data has been deleted.');
    }
}
