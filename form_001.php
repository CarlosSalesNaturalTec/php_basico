<!DOCTYPE html>
<html>

<head>
    <title>Trabalhando com Formulários</title>
</head>

<body>

    <form class="form-horizontal" action="server/service1.php" method="POST">
        <fieldset>

            <div class="form-group">
                <label for="input_nome">Nome:</label>
                <input id="input_nome" name="input_nome" class ="form-control" type="text"  />
            </div>

            <div class="form-group">
                <label for="input_tel">Telefone:</label>
                <input id="input_tel" name="input_tel" class ="form-control" type="text"  />    
            </div>

            <div class="form-group">
                <button type="submit">Enviar</button>       
            </div>

        </fieldset>
    </form>

</body>
</html>