<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookList = Book::orderBy('id', 'desc')->paginate(4);
        
        return view('books.index', compact('bookList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        // die('sono arrivato qua');

        $request->validate(
            [
                'name'=>'required|max:50|min:2',
                'description'=>'required|max:100|min:2',
                'image'=>'required|max:100|min:2',
                // 'price'=>'required|max:6|min:2',
                'series'=>'required|max:50|min:5',
                'date'=>'required|max:10|min:4',
                'type'=>'required|max:50|min:5',
            ],
            [
                'name.required'=>'Il campo titolo è obbligatorio',
                'description.required'=>'Il campo descrizione è obbligatorio',
                'image.required'=>'Il campo immagine è obbligatorio',
                // 'price.required'=>'Il campo prezzo è obbligatorio',
                'series.required'=>'Il campo serie è obbligatorio',
                'date.required'=>'Il campo data è obbligatorio',
                'type.required'=>'Il campo tipo è obbligatorio',
            ]
        );

        $data = $request->all();
        $new_book = new Book();

            $new_book->name = $data['title'];
            $new_book->description = $data['description'];
            $new_book->image = $data['thumb'];
            $new_book->price = $data['price'];
            $new_book->series = $data['series'];
            $new_book->date = $data['sale_date'];
            $new_book->type = $data['type'];
            $new_book->slug = Str::slug($new_book->name,'-');
            
            $new_book->save();
            return redirect()->route('books.show', $new_book);
            
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        if($book){
           return view('books.show', compact('book'));
        }
        abort(404, 'Questo libro non è presente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        if($book){
           return view('books.edit', compact('book'));
        }
        abort(404, 'Questo libro non è presente');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['slug'], '-');
        $book->update($data);
        return redirect()->route('books.show', $book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('deleted', 'Il libro è stato eliminato');
    }
}
