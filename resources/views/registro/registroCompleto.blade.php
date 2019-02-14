@extends('plantilla.second')

@section('titulo', 'Registro')

@section('body')
<section class="hero is-primary" style="position: relative">
        <div class="hero-body">
            <div class="hero-container">                
                @include('plantilla.secondNavbar')
            </div>
        </div>
    </section>
<section class="section" >
    <div class="container">

        <div class="columns is-vcentered is-centered">
            <div class="column is-5">

                <form action="{{ route('Confirmacion') }}" method="post">
                    @csrf
                    @if (isset($d))
                        <input type="hidden" name="codigo" value="{{ $d->codigo }}"> 
                        <input type="hidden" name="id" value="{{ $d->id }}"> 
                    @endif
                    
                    <div class="field">
                        <label class="label" for="alumno">Nombre completo:</label>
                        <input class="input" type="text" name="nombre" maxlength="40" id="nombre" autocomplete="off" required>
                    </div>

                    <!--div class="columns">
                        <div class="column is-6">
                            <div class="field">
                                <label class="label" for="ap1">Primer apellido:</label>
                                <input class="input" type="text" class="form-control" name="ap1" id="ap1" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="field">
                                <label class="label" for="ap2">Segundo apellido:</label>
                                <input class="input" type="text" class="form-control" name="ap2" id="ap2" autocomplete="off" required>
                            </div>
                        </div>
                    </div-->

                    <div class="columns is-mobile">
                        <div class="column is-3">
                            <div class="field">
                                <label class="label" for="edad">Edad:</label>
                                <input class="input form-control" type="number" name="edad" id="edad" max="30" min="10" placeholder="Años" required>
                            </div>
                        </div>
                        <div class="column is-9">
                            <div class="field">
                                <label class="label">E-mail</label>
                                <div class="control">
                                    <input class="input" type="email" name="email" autocomplete="off" placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="columns is-vcentered">
                       
                        <div class="column is-6">
                            <div class="control">
                                <label class="label" for="escuela">Escuela:</label>
                                <div class="control has-icons-left">
                                    <div id="escuela" class="select">
                                        
                                        @if (isset($d))
                                            <select name="id_escuela">
                                                <option value="{{ $d->pk_escuelas }}">{{$d->escuela}}</option>   
                                            </select> 
                                        @else
                                            <select name="id_escuela">
                                                <option selected> Seleccionar tu escuela </option>
                                                @foreach ($escuelas as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                        
                                    </div>
                                    <div class="icon is-small is-left">
                                        <i class="fas fa-school"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="column is-6">
                            <div class="field">
                                <label class="label" for="escuela">Comite:</label>
                                <div class="control has-icons-left">
                                    <div id="escuela" class="select">
                                        @if (isset($d))
                                            <select name="id_comite">
                                                <option value="{{ $d->pk_comite }}" disable>{{ $d->comite }}</option>
                                            </select>
                                        @else
                                            <select name="id_comite" id="comite">
                                                <option value="0" selected> Selecciona tu Comite </option>
                                                @foreach ($comites as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                                                @endforeach  
                                            </select>
                                        @endif                                       
                                        
                                    </div>
                                    <div class="icon is-small is-left">
                                        <i class="fas fa-comment-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                
                    <div class="columns">
                        <div class="column">
                            
                            <div class="field">
                                <label class="label" for="escuela">Pais:</label>
                                <div class="control has-icons-left">
                                    <div id="escuela" class="select">
                                        
                                        @if (isset($d))
                                            <select name="id_pais">
                                                <option value="{{ $d->pk_pais }}">{{ $d->pais }}</option> 
                                            </select>
                                        @else
                                            <select name="id_pais" id="pais">
                                                <option value="0"  selected> Selecciona tu pais </option> 
                                            </select>
                                        @endif                                
                                        
                                    </div>
                                    <div class="icon is-small is-left">
                                        <i class="fas fa-flag"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <button type="submit" class="button is-danger is-rounded">Enviar</button>
                </form> 

            </div>


            <!--div class="column has-text-centered">  
                <img src="img/logo.png" alt="">
                
                <p class="title">Registro con código</p>
                <a href="#" onclick="toggleModal()" class="button is-rounded is-danger">Registrarme</a>
            </div-->
        </div>

    </div>
</section>
@endsection 

<script src="{{ asset('js/jquery.min.js')}}"></script>
<script>
$(document).ready(function(){
    $('select#comite').change(function(){
        var data = $('#comite').val();
		$.ajax({
			url: '/Registro/getPaises',
			type: 'GET',
			dataType: 'json',
			data: 'comite='+data
		})
		.done(function(dato){
            var option = "<option value='0'>Selecciona tu Pais</option>";
            var e = "";
            for (let index = 0; index < dato.length; index++) {
                element = dato[index];
                e = "<option value='"+element.id+"'>"+element.pais+"</option>"
                option = option + e;
            }

            $('#pais').html(option);                      
		})
		.fail(function(dato){
            //console.log(dato);
			alert('Error en el sistema.');
		});
	});
});
</script>