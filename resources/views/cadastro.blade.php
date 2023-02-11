<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="resources\css\app.css" rel="stylesheet">
</head>
<body>
@include('header')
    <div class="text-center mw-100 mh-100" style="background-color: #00CED1; height: 650px; display: flex; justify-content: center;">
        <div style="align-self: center;">
            <form action="/cadastrar-candidato" method="post">
                @csrf
                <h3>Formulário para cadastro de candidato</h3><br><br>
                <label for="">Nome:</label>
                <input type="text" placeholder="Digite seu nome:" name="Nome_candidato">
                <br> <br>
                <label for="">Idade:</label>
                <input type="number" placeholder="Digite sua idade:" name="Idade_candidato">
                <br> <br>
                <label for="">Telefone:</label>
                <input type="text" placeholder="Digite seu telefone:" name="Telefone_candidato">
                <br> <br>
                <label for="">Profissão:</label>
                <input type="text" placeholder="Digite sua profissão:" name="Profissao_candidato">
                <br> <br>
                <button class="btn btn-primary" type="submit"> Enviar cadastro</button> <button class="btn btn-danger" type="reset"> Limpar campos</button>

            </form>
        </div>
    </div>
    @include('footer')
</body>
</html>