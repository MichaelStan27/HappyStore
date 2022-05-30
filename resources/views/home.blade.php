@extends('layouts.app')

@section('title','Home')

@section('content')
    <div class="container mx-auto mt-4 d-flex gap-5">
        <div class="w-75">
            <h1 class="bg-dark text-light fs-2 px-2 py-2">Book List</h1>
            <table class="table table-dark table-striped">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->detail->author }}</td>
                        </tr> 
                    @endforeach
                </tbody>
              </table>
              {{ $books->links() }}
        </div>
        <div class="">
            <h1 class="bg-dark text-light fs-2 px-4 py-2">Category</h1>
            @foreach ($categories as $category)
                <a href="" class="d-block bg-dark text-light text-center py-2">{{ $category->category }}</a>
            @endforeach
        </div>
    </div>
@endsection