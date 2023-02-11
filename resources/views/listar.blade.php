<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Laravel</title>
    <link href="resources\css\app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
@include('header')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
      <th scope="col">Telefone</th>
      <th scope="col">Profissão</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($candidatos as $candidato)
    <tr>
      <th scope="row">{{ $candidato->id }}</th>
      <td>{{ $candidato->nome }}</td>
      <td>{{ $candidato->idade }}</td>
      <td>{{ $candidato->telefone }}</td>
      <td>{{ $candidato->profissao }}</td>
      <td><a class="btn btn-primary" href="/editar-candidato/{{ $candidato->id }}" role="button">Editar</a>  <a class="btn btn-danger" href="/excluir-candidato/{{ $candidato->id }}" role="button">Excluir</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@include('footer')
</body>
</html>