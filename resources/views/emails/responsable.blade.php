<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        {{ $data->responsable }}
    </h1>
    <br>
    <p style="font-size: 1.5em;text-align: justify; color:#4a4a4a">
        Este correo es para confirmar el registro de: <span style="color:#01579b">{{ $data->nombre }}</span>
        como un participante más de nuestro Modelo de Naciones Unidas.
    </p>
    <p style="font-size: 1.5em;text-align: justify; color:#4a4a4a">
        De la misma manera, le informamos que hemos registrado esta dirección de correo en 
        nuestra plataforma y así podrá acceder y monitorear el estado de registro de sus 
        delegados participantes en Tecmimun 2019.
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
            <p style="color:#4a4a4a">CONTRASEÑA: <span style="color:#01579b">{{ $data->password }}</span></p>
            <a target="_blank" href="http://tecmimun.com" >
                tecmimun.com
            </a>
        </div>
        <br>
    </div>


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
                        
                <p style="color:#4a4a4a">CLAVE: <span style="color:#01579b">mayo-tec2019</span></p>
                <a target="_blank" href="http://tecmimun.com/comites/antecedentes" >
                    Antecendentes
                </a>
            </div>
            <br>
            <p style="font-size: 1.5em;text-align: justify; color:#4a4a4a">
                Le invitamos a estar pendiente del registro de Sus delegados e informarnos si surge algún error.    
            </p>
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