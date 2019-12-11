<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Tudo sobre HTTP - Bruno de Queirós </title>
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <a href="index.php">
            <section class="container-fluid link-api">
                <p> Página inicial </p>
            </section>
        </a>
        <section class="container content">
            <h2> Usando com o método GET - 1 - Listar usuários </h2>
            <span id="resp-req-1" class="resp-req"> </span>
            <div id="method1" class="row py-5"> </div>

            <h2> Usando com o método GET - 2 - Usuário simples não encontrado </h2>
            <span id="resp-req-2" class="resp-req"> </span>
            <div id="method2" class="row py-5"> </div>

            <h2> Usando com o método POST - 3 - Criando um usuário </h2>
            <span id="resp-req-3" class="resp-req"> </span>
            <div id="method3" class="row py-5">
                <label> Nome </label>
                <span id="nome-mt3"></span>

                <label> Job </label>
                <span id="job-mt3"></span>

                <label> ID </label>
                <span id="id-mt3"></span>

                <label> Criado em </label>
                <span id="create-mt3"></span>
            </div>

            <h2> Usando com o método PUT - 4 - Atualizar usuário </h2>
            <span id="resp-req-4" class="resp-req"> </span>
            <div id="method4" class="row py-5">
                <label> Nome </label>
                <span id="nome-mt4"></span>

                <label> Job </label>
                <span id="job-mt4"></span>

                <label> Atualizado em </label>
                <span id="att-mt4"></span>

            </div>

            <h2> Usando com o método DELETE - 5 - Apagando usuário </h2>
            <span id="resp-req-5" class="resp-req"> </span>
            <div id="method5" class="row py-5"> </div>

            <h2> Usando com o método PATCH - 6 </h2>
            <span id="resp-req-6" class="resp-req"> </span>
            <div id="method6" class="row py-5">
                <label> Nome </label>
                <span id="nome-mt6"></span>

                <label> Job </label>
                <span id="job-mt6"></span>

                <label> Atualizado em </label>
                <span id="att-mt6"></span>

            </div>

        </section>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/api.js"></script>
</body>

</html>