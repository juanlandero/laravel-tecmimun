@extends('plantilla.second')

@section('titulo', 'Registro')

@section('body')
@include('plantilla.navbar')

<section class="hero is-success">
    <div class="hero-body">
        <div class="container">
            <p class="sub-title">
                Rellena el formulario de la izquierda para realizar tu registro desde 0. Si ya han realizado un pre-registro de tus datos, 
                da click en el boton <strong>Registrarme</strong> que se encuentra en el lado derecho e ingresa el código que te ha proporcionado
            </p>
        </div>
    </div>
</section>

<section class="section" >
    <div class="container">

        <div class="columns is-vcentered">
            <div class="column">

                <form>
                    <div class="field">
                        <label class="label" for="nombre">Nombre(s):</label>
                        <input class="input" type="text" id="nombre" autocomplete="off" required>
                    </div>

                    <div class="columns">
                        <div class="column is-6">
                            <div class="field">
                                <label class="label" for="ap1">Primer apellido:</label>
                                <input class="input" type="text" class="form-control" id="ap1" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="field">
                                <label class="label" for="ap2">Segundo apellido:</label>
                                <input class="input" type="text" class="form-control" id="ap2" autocomplete="off" required>
                            </div>
                        </div>
                    </div>

                    
                    <div class="columns is-vcentered">
                        <div class="column is-6">
                            <div class="field">
                                <label class="label" for="edad">Edad:</label>
                                <input class="input" type="number" class="form-control" id="edad" placeholder="Años" required>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="field">
                                <label class="label" for="escuela">Escuela:</label>
                                <div id="escuela" class="select">
                                    <select>
                                        <option selected> Seleccionar tu escuela </option>
                                        <option>Tecmilenio</option>
                                        <option>AUG</option>
                                        <option>Tabasco</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label class="label" for="escuela">Pais:</label>
                                <div id="escuela" class="select">
                                    <select>
                                        <option value="0" disable selected> Selecciona tu pais </option>
                                        <option>Mexico</option>
                                        <option>URS</option>
                                        <option>Congo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label class="label" for="escuela">Comite:</label>
                                <div id="escuela" class="select">
                                    <select>
                                        <option value="0" disable selected> Selecciona tu Comite </option>
                                        <option>Comite1</option>
                                        <option>Comite2</option>
                                        <option>Comite3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="button is-danger is-rounded">Enviar</button>
                </form> 

            </div>


        <div class="column has-text-centered">  
            <!--img src="img/logo.png" alt=""-->
            
            <p class="title">Registro con código</p>
            <a href="#" onclick="toggleModal()" class="button is-rounded is-danger">Registrarme</a>
        </div>
        </div>

    </div>
</section>
@endsection 
@include('registro.modalRegistro')

<script src="js/jquery.min.js"></script>
<script>
$(document).ready(function(){

});

function toggleModal(){
    var modal = $('#modal')
    if(modal.hasClass("is-active")){
        modal.removeClass("is-active");
    }else{
        modal.addClass("is-active");
    }
}
</script>