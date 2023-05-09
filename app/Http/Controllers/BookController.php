<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    public function index (){
        // echo "<h1>Test controller</h1>";

        // $data =[
        //     'title' => 'Ini Senarai Buku'
        // ];
        // $u= Book::factory()->make();
        // Log::debug($u);

        // $books = Book::all();

        // dd($books);

        $data =[
            'title' => 'Ini Senarai Buku',
            'books' => Book::all()
        ];
        return view('books.index', $data);
    }
}
