<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function store()
    {
        $data = $this->getValidate();

        $book = Book::create($data);
        return redirect($book->path());
    }

    public function update(Book $book)
    {
        $data = $this->getValidate();

        $book->update($data);
        return redirect($book->path());
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/books');
    }

    /**
     * @return array
     */
    protected function getValidate(): array
    {
        return request()->validate([
            'title' => 'required',
            'author' => 'required',
        ]);
    }
}
