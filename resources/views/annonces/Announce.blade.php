@extends("layouts.template")

@section("content")

<div class="announceContent">
    <p><strong> Titre de l'annonce : </strong> <br>{{ $annonce->title }}</p>
    <p><strong> Description de l'annonce : </strong> <br>{{  $annonce->description }}</p>
    <p><strong> Type de l'annonce : </strong> <br>{{ $annonce->type }}</p>
    <p><strong> Catégorie : </strong> <br>{{ $annonce->categorie->nom ? $annonce->categorie->nom : "Non classé" }}</p>
</div>

<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .announceContent {
        box-shadow: 0 4px 14px 0 rgba(0,0,0,0.10);
        padding: 20px;
        border-radius: 20px;
        width: 95vw;
        margin: 50px auto;
        line-height: 2;
    }
</style>
@endsection