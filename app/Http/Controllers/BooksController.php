<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function store()
    {
        $data = $this->getValidate();

        Book::create($data);
    }

    public function update(Book $book)
    {
        $data = $this->getValidate();

        $book->update($data);
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
