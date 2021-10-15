@extends("layouts.base")

@section("title", "Librairie")

@section("wrapper")
    <h1>Librairie</h1>
    <div class="booklist-wrapper">
        <table>
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Date</th>
            </tr>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publication_year }}</td>
                <tr>
            @endforeach
        </table
    </div>

    {{-- @foreach ($books as $book)
        <div class="book-container">
            <h5>{{ $book->title }}</h5>
            <div class="book-info"><b>Auteur : </b> {{ $book->author }}</div>
            <div class="book-info"><b>Genre : </b>{{ $book->genre }}</div>
            <div class="book-info"><b>Année de parution : </b> {{ $book->publication_year }}</div>
            <div class="book-info"><b>Synopsis : </b>{{ $book->synopsis }}</div>
        </div>
    @endforeach --}}
@endsection