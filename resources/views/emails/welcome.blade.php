@extends('emails.layout')

@section('content')
    <div style="background-color: #ffffff; border-color: #e8e5ef; border-radius: 2px; border-width: 1px; margin: 0 auto; padding: 10px; max-width: 100%;">
        <h3 style="text-align:center">Bienvenu sur {{ config('app.name') }}, {{ $data->name }}</h3>

        <p style="text-align:center">Votre inscription a été validé. Vous pouvez dès à présent accéder à votre dashboard :</p>

        <a style="box-sizing: border-box;
                font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';
                border-radius: 4px;
                color: #fff;
                display: block;
                overflow: hidden;
                text-decoration: none;
                background-color: #2d3748;
                border-bottom: 8px solid #2d3748;
                border-left: 18px solid #2d3748;
                border-right: 18px solid #2d3748;
                border-top: 8px solid #2d3748;
                width: 20%;
                text-align: center;
                margin: 0 auto;" 
        href="{{ config('app.url') }}">
            Accéder
        </a>
    </div>
@endsection