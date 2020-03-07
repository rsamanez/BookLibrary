<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorsController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'dob'  => 'required|date_format:m/d/Y',
        ]);

        Author::create($data);
    }
}
