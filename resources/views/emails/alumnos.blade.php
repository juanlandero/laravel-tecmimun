<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

<div style="width: 100%;
            height: 50px;
            background-color: #fff;
            color: black;
            display: flex;
            align-items: center;">

    <div style="width: 100%;">
        <h1 style="
            font-size: 2.5em;
            padding: 0;
            margin: auto;
            text-align: center;">
            BIENVENIDO(A)
        </h1>
    </div>
    
</div>

<br><br>
<div  style="margin: 0px 10%">
    <h1 style="text-align: center;
                font-size: 2.5em;
                color:#78a42e">
        {{ $data->nombre }}
    </h1>
    <br>
    <p style="font-size: 1.5em;text-align: justify; color:#4a4a4a">
        Estamos contentos de contar con tu participación en Tecmimun 2019
    </p>
    <p style="font-size: 1.5em;text-align: justify; color:#4a4a4a">
        Los datos que te proporcionamos en este e-mail son de uso <strong>personal</strong>.
        El código y tu dirección de correo te darán acceso a nuestro sistema el día del evento,
        por esa razón es muy importante que el día del evento te sepas ambos datos.
    </p>
    
    <div style="width: 100%; text-align: center;">

        <div style="
                    width: 80%;
                    border-radius: 6px;
                    box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);
                    color: #4a4a4a;
                    display: block;
                    padding: 1.25rem;
                    margin: auto;
                    font-size: 1.5em;">
                    
            <p style="color:#4a4a4a">USUARIO: <span style="color:#01579b">{{ $data->email }}</span></p>
            <p style="color:#4a4a4a">CÓDIGO: <span style="color:#01579b">{{ $data->codigo }}</span></p>
        </div>
        <br>
        <div style="
                width: 80%;
                border-radius: 6px;
                box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);
                color: #4a4a4a;
                display: block;
                padding: 1.25rem;
                margin: auto;
                font-size: 1.5em;">
                
        <p style="color:#4a4a4a">ESCUELA: <span style="color:#01579b">{{ $data->escuela }}</span></p>
        <p style="color:#4a4a4a">COMITÉ: <span style="color:#01579b">{{ $data->comite }}</span></p>
        <p style="color:#4a4a4a">DELEGACIÓN: <span style="color:#01579b">{{ $data->pais }}</span></p>
        </div>


    </div>
</div>

<br>
<br>
<div>
    ¿Tienes alguna duda?, escríbemos a tecmimunvhsa@gmail.com
</div>
<br>
<div style="width: 100%;
            height: 50px;
            background-color: #4a4a4a;
            display: flex;
            align-items: center;">
    <a style="margin: auto;
            text-decoration: none;
            color: #78a42e;"  href="http://www.tecmimun.com" >
        Enviado desde www.tecmimun.com
    </a>
</div>
</body>
</html>