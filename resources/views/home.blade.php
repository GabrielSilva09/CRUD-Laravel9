<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Laravel</title>
    <link href="css\app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    @include('header')
    <div  style="background-color: #000000; height: 650px;">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-xs-12" style="margin-top: 30px;">
                    <h1 style="color: #FFFFFF; font-weight: bold;">Projeto de aprendizado PHP 8.2 com Laravel 9</h1>
                    <p style="color: #FFFFFF; font-size: 20px; margin-top: 30px;">Projeto desenvolvido por Gabriel Silvério, cientista da computação e desenvolvedor full-stack, utilizando HTML5, CSS3, PHP 2.2 e Laravel 9, visando colocar em prática conhecimentos adiquiridos através de estudos e cursos nestas tecnologias.</p>
                    <p style="color: #FFFFFF; font-size: 20px; margin-top: 30px;">Layout e design bem simplificados pois o intuito do projeto é demonstrar conhecimentos do back-end, funcionamento de rotas, templates blade, funcionamento de APIs e toda a conexão com banco de dados, desde a criação de novos registros até atualização e exclusão.</p>
                    <p style="color: #FFFFFF; font-size: 20px; margin-top: 30px;">Os botões a seguir redirecionam respectivamente para meu LinkedIn, onde meu currículo e informações pessoais podem ser vistos na íntegra, e para meu Github, onde tenho outros projetos de estudo para portifólio.</p>
                    <p style="margin-top: 30px;"><button class="btn btn-primary"><a href="https://www.linkedin.com/in/gabriel-silvério-b697201b8/" style="text-decoration: none;color: #FFFFFF; font-weight: bold; font-size: 15px;">Acesse meu linkedin</a></button>   <button class="btn btn-outline-success"><a href="https://github.com/GabrielSilva09" style="text-decoration: none; color: #198754; font-weight: bold; font-size: 15px;">Acesse meu Github</a></button></p>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</body>

</html>