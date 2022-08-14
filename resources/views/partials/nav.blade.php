<nav>
    <ul class="nav">
        <li><a href="{{ route("home") }}">Accueil</a></li>
        <li><a href="{{ route("announce.createForm") }}">Créer</a></li>
        <li><a href="{{ route("userProfil") }}">Mon compte</a></li>
    </ul>
</nav>

<style>
    .nav {
        display: flex;
        background: #fff;
        box-shadow: 0 4px 14px 0 rgba(0,0,0,0.10);
        padding: 10px;
        list-style: none;
        font-size: 1.5em;
        border-radius: 0 0 20px 20px;
    }
    .nav a {
        text-decoration: none;
        color: inherit;
    }

    .nav li {
        margin-left: 30px;
    }
</style>


