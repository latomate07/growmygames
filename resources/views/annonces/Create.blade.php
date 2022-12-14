@extends("layouts.template")

@section("content")

<form action="{{ url('announce/create') }}" method="post" enctype="multipart/form-data">
    @csrf
    @if(!empty($errors))
        @foreach ($errors->all() as $error)
        <p style="color:red">{{ $error }}</p>
        @endforeach
    @endif
    <input type="text" placeholder="Nom du jeu" name="title">
    <textarea name="description" placeholder="Description du jeu"></textarea>
    <select name="type" id="">
        <option value="Affiliation rémunéré">Affiliation rémunéré</option>
        <option value="Affiliation non rémunéré">Affiliation non rémunéré</option>
    </select>
    <select name="categorie" id="">
        <option value="Jeu d'action">Jeu d'action</option>
        <option value="Jeu d'aventure">Jeu d'aventure</option>
        <option value="Jeu de sport">Jeu de sport</option>
        <option value="Jeu de danse">Jeu de danse</option>
    </select>

    <input type="file" name="image" id="image">
    <input type="submit" value="Créer">
</form>

<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    form {
        padding: 20px;
        box-shadow: 0 4px 14px 0 rgba(0, 0, 0, 0.10);
        margin: 50px;
        display: flex;
        flex-direction: column;
        line-height: 2;
    }

    form input,
    form select,
    form textarea {
        padding: 5px;
        line-height: 2;
        border: 2px solid whitesmoke;
        border-radius: 10px;
        margin: 10px;
        resize: none;
    }

    form input[type="submit"] {
        cursor: pointer;
        transition: .3s all ease-in-out;
    }

    form input[type="submit"]:hover {
        background: #2f2f2f;
        color: #fff;
    }

    form input:focus,
    form select:focus,
    form textarea:focus {
        outline-color: #2f2f2f;
    }

    form select {
        height: 40px;
        cursor: pointer;
    }
</style>
@endsection