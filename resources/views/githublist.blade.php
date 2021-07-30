@extends ('layouts.app')

@section ('content')
    <div class = "container-sm ">
        <form action="{{route('github.newuser')}}" method  = "POST">
            @csrf
            <div class="row py-2 border-2">
                <div class = "col-5">
                    <input type="text" class="form-control" name = "githubUserName" id="githubUserName" placeholder="Digite o nome do usuário que deseja buscar">
                </div>
                <div class = "col-2">
                    <button class = "btn btn-primary" type = "submit">Inserir Novo Usuário</button>
                </div>
            </div>
        </form>

        <label for="list"><h3>Lista de Usuários Retornados</h3></label>
        @if ($githubUsers->count() == 0)
            <ul id = "list" class="list-group">
                <li class="bg-light list-group-item d-flex justify-content-between align-items-center">
                    Não há usuários na lista
                </li>
            <ul>
        @else
            <ul id = "list" class="list-group">
                @foreach($githubUsers as $githubUser)
                    <li class="bg-light list-group-item d-flex justify-content-between align-items-center">
                        {{$githubUser->username}}
                        <a href="/{{$githubUser->username}}" target="_parent" class = "badge btn btn-success rounded-pill">Ver mais</a>
                        <a href="/github-user-list/delete-github-user/{{$githubUser->id}}" class = "badge btn btn-danger rounded-pill">Remover Usuário</a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

@endsection