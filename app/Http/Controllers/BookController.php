<?php

namespace App\Http\Controllers;

use App\Model\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Http\Resources\Book\BookResource;
use App\Http\Resources\Book\BookCollection;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Http;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BookCollection::collection (Book::all());

        return response([
            'status_code' => 200,
            'status' => 'success',
            'data' => $data,
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $book = new Book;
        $book->name = $request->name;
        $book->isbn = $request->isbn;
        $book->authors = $request->authors;
        $book->number_of_pages = $request->number_of_pages;
        $book->publisher = $request->publisher;
        $book->country = $request->country;
        $book->release_date = $request->release_date;
        $book->save();
        $data = new BookResource($book);
        return response([
            'status_code' => 201,
            'status' => 'success',
            'data' => $data,
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $data = new BookResource($book);
        return response([
            'status_code' => 200,
            'status' => 'success',
            'data' => $data,
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        $data = new BookResource($book);
        return response([
            'status_code' => 200,
            'status' => 'success',
            'message' => 'The book ' . $book->name . ' was updated successfully',
            'data' => $data,
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return response([
            'status_code' => 204,
            'status' => 'success',
            'message' => 'The book ' . $book->name . ' was deleted successfully',
            'data' => [],
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Display the specified resource from an external API service.
     *
     * @param  \App\Model\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function externalBooks($bookName)
    {
        $iceFireApiUrl = env('ICE_AND_FIRE_API_URL');

        $response = Http::get( 'https://api.github.com/users/paulredmond/gists' );

        // Array of data from the JSON response
        $data = $response->json();

        return response([
            'status_code' => 200,
            'status' => 'success',
            'data' => $response,
        ], Response::HTTP_OK);

    }
}
