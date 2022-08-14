@extends("layouts.template")

@section("content")

<form action="{{ url('announce/create') }}" method="post">
    @csrf
    <input type="text" placeholder="Nom du jeu" name="title" required>
    <textarea name="description" placeholder="Description du jeu" required></textarea>
    <select name="type" id="" required>
        <option value="Affiliation rémunéré">Affiliation rémunéré</option>
        <option value="Affiliation non rémunéré">Affiliation non rémunéré</option>
    </select>
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
        box-shadow: 0 4px 14px 0 rgba(0,0,0,0.10);
        margin: 50px;
        display: flex;
        flex-direction: column;
        line-height: 2;
    }
    form input, form select, form textarea {
        padding: 5px;
        line-height: 2;
        border: 2px solid whitesmoke;
        border-radius:10px;
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
    form input:focus, form select:focus, form textarea:focus {
        outline-color: #2f2f2f;
    }

    form select {
        height: 40px;
        cursor: pointer;
    }
</style>
@endsection