<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="resources\css\app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>CRUD Laravel</title>
</head>
<body>
@include('header')
<div class="text-center mw-100 mh-100" style="background-color: #00CED1; height: 650px; display: flex; justify-content: center;">
        <div style="align-self: center;">
            <form action="/atualizar-candidato/ {{ $candidato->id }}" method="post">
                @csrf
                @method("PUT")
                <h3>Formulário para edição de candidato</h3><br><br>
                <label for="">Nome:</label>
                <input type="text" placeholder="Digite seu nome:" name="Nome_candidato" value="{{ $candidato->nome }}">
                <br> <br>
                <label for="">Idade:</label>
                <input type="number" placeholder="Digite sua idade:" name="Idade_candidato" value="{{ $candidato->idade }}">
                <br> <br>
                <label for="">Telefone:</label>
                <input type="text" placeholder="Digite seu telefone:" name="Telefone_candidato" value="{{ $candidato->telefone }}">
                <br> <br>
                <label for="">Profissão:</label>
                <input type="text" placeholder="Digite sua profissão:" name="Profissao_candidato" value="{{ $candidato->profissao }}">
                <br> <br>
                <button class="btn btn-primary" type="submit"> Editar cadastro</button> 

            </form>
        </div>
    </div>
    @include('footer')
</body>
</html>