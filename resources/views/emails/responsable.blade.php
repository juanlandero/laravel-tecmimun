<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div style="height: 250px; width: 100%; text-align: center; margin: auto;">
    <img src="{{ asset('img/logo.png') }}" alt="Logo" height="220px">
</div>

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
            BIENVENIDO
        </h1>
    </div>
    
</div>

<br><br><br><br><br>
<div  style="margin: 0px 10%">
    <h1 style="text-align: center;
                font-size: 2.5em;
                color:#78a42e">
        {{-- $data->responsable --}}Juan Carlos Landero Isidro
    </h1>
    <br>
    <p style="font-size: 1.5em;text-align: justify; color:#4a4a4a">
        Este correo es para confirmar el registro del colegio <span style="color:#01579b">{{-- $data->nombre --}}Juan Carlos Landero Isidro</span>, 
        como un participante mas de nuestro Modelo de Naciones Unidas.
    </p>
    <p style="font-size: 1.5em;text-align: justify; color:#4a4a4a">
        De la misma manera, te informamos que hemos registrado esta direccion de correo en 
        nuestra plataforma y así podras acceder y monitorear el estado de registro de tus 
        delegados participantes en este Tecmimun 2019.
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
                    
            <p style="color:#4a4a4a">Usuario: <span style="color:#01579b">{{-- $data->email --}} jc_l23@hotmail.com</span></p>
            <p style="color:#4a4a4a">Contraseña: <span style="color:#01579b">{{-- $data->password --}}wr13r</span></p>
            <a style=" text-decoration: none;
                    margin:0;
                    -moz-user-select: none;
                    -webkit-appearance: none;
                    align-items: center;
                    border: 1px solid transparent;
                    box-shadow: none;
                    display: inline-flex;
                    font-size: 1rem;
                    height: 2.25em;line-height: 2;
                    position: relative;vertical-align: top;
                    background-color: transparent;
                    border-color: #43a047; color: #43a047;
                    border-radius: 290486px;padding-left: 1em;
                    padding-right: 1em; border-width: 1px;
                    cursor: pointer;justify-content: center;
                    padding-bottom: calc(0.375em - 1px);
                    padding-top: calc(0.375em - 1px);
                    text-align: center;
                    white-space: nowrap;" href="cmir.com.mx/login" >
                Iniciar sesión
            </a>
        </div>
        <br>
        <p style="font-size: 1.5em;text-align: justify; color:#4a4a4a">
            Te invitamos a estar pendiente del registro de tus delegados e informarnos si surge algún error.    
        </p>
    </div>
</div>

<br>
<br>
<div>
    ¿Tienes alguna duda?, escribemos a tecmimunvhsa@gmail.com
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