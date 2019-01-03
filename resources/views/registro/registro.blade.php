<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de usuario</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Registro de delegados</span>
</nav>

<div class="container">
    <div class="row">

        <form>
            
            <div class="col-md-12 mb-3">
                <label for="nombre">Nombre(s):</label>
                <input type="text" class="form-control" id="nombre" placeholder="Jose Carlos" required>
            </div>
            <div class="col-md-12 mb-3">
                <label for="ap1">Primer apellido:</label>
                <input type="text" class="form-control" id="ap1" placeholder="López" required>
            </div>
            <div class="col-md-12 mb-3">
                <label for="ap2">Segundo apellido:</label>
                <input type="text" class="form-control" id="ap2" placeholder="Cordova" required>
            </div>
            <div class="col-md-12 mb-3">
                <label for="edad">Edad:</label>
                <input type="number" class="form-control" id="edad" placeholder="Años" required>
            </div>

            <div class="col-auto mb-3">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Escuela:</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Elige tu colegio...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                </div>

            <button type="submit" class="btn btn-success">Enviar</button>
        </form>


    </div>
</div>
    
</body>
</html>