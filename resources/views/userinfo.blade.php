@extends('layouts.app')
@section('content')
    <div class = "container">
        <h5>Datalhamento do usuário: {{$userinfo['login']}}</h5>
        <div class = "container border">
            <div class = "row">
                <div class = "col-3">
                    <label><b>Nome do usuário:</b></label>
                    {{$userinfo['name']}}
                </div>

                <div class = "col-3">
                    <label><b>ID do usuário: </b></label>
                    {{$userinfo['id']}}
                </div>

                <div class = "col-3">
                    <label><b>Tipo: </b></label>
                    {{$userinfo['type']}}
                </div>

                <div class = "col-3">
                    <label><b>Bio: </b></label>
                    {{$userinfo['bio']}}
                </div>
            </div>

            <div class = "row">
                <div class = "col-3">
                    <label><b>Seguidores: </b></label>
                    {{$userinfo['followers']}}
                </div>

                <div class = "col-3">
                    <label><b>Seguindo: </b></label>
                    {{$userinfo['following']}}
                </div>

                <div class = "col-5">
                    <a href="{{$userinfo['html_url']}} ">Visitar Perfil</a>
                </div>
            </div>
        </div>
    </div>
@endsection