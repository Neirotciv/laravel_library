@extends("layouts.base")

@section("title", "Formulaire")

@section("wrapper")
    <h1>Ajouter un livre</h1>
    <form class="book-form row g-3 needs-validation" action="/store" method="POST">
        @csrf
        <div class="col-md-4">
            <label for="title" name="title" class="form-label">Titre</label>
            <input type="text" class="form-control" id="title">
        </div>
        <div class="col-md-4">
            <label for="author" name="author" class="form-label">Auteur</label>
            <input type="text" class="form-control" id="author">
        </div>
        <div class="col-md-4">
            <label for="publication_year" name="publication_year" class="form-label">Année de publication</label>
            <input type="number" class="form-control" id="publication_year">
        </div>
        <div class="mb-3">
            <label for="genre" name="genre““" class="form-label">Genre</label>
            <input type="text" class="form-control" id="genre">
        </div>
        <div class="mb-3">
            <label for="synopsis" name="synopsis" class="form-label">Synopsis</label>
            <input type="text" class="form-control" id="synopsis">
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Valider</button>
        </div>
    </form>
@endsection