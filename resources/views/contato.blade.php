
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>HELLO WORD !</h1>
    <div>
        <h2>Teste com rotas</h2>
        <form action="/contatos" method="post">
            {{ csrf_field() }}
            <input type="text" name="nome" placeholder="Nome / POST">
            <button>Enviar</button>
        </form>

        <form action="/contatos" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            <input type="text" name="nome" placeholder="Nome / PUT">
            <button>Enviar</button>
        </form>
    </div>
</body>
</html>
