@extends('layouts.template')

@section("content") 
    <p>{{ session('status') }}</p>
    <h2 class="title">Nos annonces ({{ $data->total() }})</h2>

    <div class="list">
        @if(count($data) !== 0)
            @foreach ($data as $item)
            <div class="announceBlock">
                <ul class="listBlockElements">
                    <li><strong>Nom :</strong> {{ $item["title"] }}</li>
                    <li><strong>Description :</strong> {{ $item["description"] }}</li>
                    <li><strong>Type d'affiliation :</strong> {{ $item["type"] }}</li>
                </ul>
                <a href="{{ route("announce.show", $item["id"]) }}" class="btn">Voir l'annonce</a>
            </div>
            @endforeach
        @else 
        <div>
            <p>Aucune annonce n'a été publiée pour le moment.</p>
        </div>
        @endif

    </div>
    {{ $data->links() }}

    <script src="https://cdn.tailwindcss.com" defer></script>

    <style>
        * {
           padding: 0;
           margin: 0;
           box-sizing: border-box;
        }
        .list {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .content {
            padding: 0 20px;
            margin: 40px 0;
        }
        .title {
            margin-bottom: 10px;
        }
        .announceBlock {
            box-shadow: 0 4px 14px 0 rgba(0,0,0,0.10);
            padding: 10px;
            border-radius: 20px;   
            margin: 0 10px 20px 10px;  
            width: 47%;     
        }
        @media(max-width: 878px) {
            .announceBlock {
                width: 100%;
            }
        }
        .announceBlock .listBlockElements {
            list-style: none;
        }
        .announceBlock .listBlockElements li {
            margin: 20px 0;
        }
        .announceBlock .listBlockElements:first-child {
            margin-top: 0;
        }
        .btn {
            text-decoration: none;
            color: inherit;
            padding: 10px;
            background: #2f2f2f;
            border-radius: 20px;
            text-align: center;
            display: inline-block;
            color: #fff;
        }
    </style>
@endsection