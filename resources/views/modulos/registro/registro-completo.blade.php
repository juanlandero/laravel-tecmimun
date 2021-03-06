@extends('modulos.plantilla.main-full')

@section('titulo', 'Registro')

@section('body')
    <div style="position:absolute; right: 5%; top:25px; z-index: 10; color: white" class="has-text-green">
        @include('modulos.plantilla.navbar')
    </div>

<section class="section" style="height: 100%">
    <div class="container" style="height: 100%" >

        <form action="{{ route('Confirmacion') }}" method="post" class="columns is-mobile is-multiline is-vcentered is-centered" style="height:100%;">
            @csrf
            @if (isset($d))
                <input type="hidden" name="codigo" value="{{ $d->codigo }}"> 
                <input type="hidden" name="id" value="{{ $d->id }}"> 
            @endif   

            <div class="column is-12-desktop is-12-mobile">
                <div class="columns has-text-centered">
                    <div class="column">
                        <h1 class="title is-size-2-desktop">Ingresa tus <span class="has-text-success">datos</span></h1>
                    </div>
                </div>

                <br><br>

                <div class="column">
                    
                    <div class="columns is-centered">
                        <div class="column is-6">
                        
                            <div uk-slider="center: true; finite:true; draggable: false" style="height: 100%;">
                                <div class="uk-slider-container" style="height: 100%">
                            
                                    <ul class="uk-slider-items">
                                        
                                        <li style="width: 100%">
                                            <div class="columns is-centered is-mobile" style="padding-top: 20px;">
                                                <div class="column is-9-desktop is-10-tablet is-12-mobile has-text-centered">
                                                    <label for="nombre">NOMBRE COMPLETO</label>
                                                    <input class="input is-primary is-rounded is-medium campos" id="nombre" type="text" name="nombre" maxlength="45" id="nombre" autocomplete="off" required>
                                                </div>
                                            </div>
                                        </li>

                                        <li style="width: 100%">
                                            <div class="columns is-centered is-mobile" style="padding-top: 20px;">
                                                <div class="column is-5-desktop is-9-mobile is-9-tablet has-text-centered">
                                                    <label for="edad">EDAD</label>
                                                    <input class="input is-primary is-rounded is-medium campos" type="number" name="edad" id="edad" max="30" min="10" required>
                                                </div>
                                            </div>
                                        </li>

                                        <li style="width: 100%">
                                            <div class="columns is-centered is-mobile" style="padding-top: 20px;">
                                                <div class="column is-9-desktop is-10-tablet is-12-mobile has-text-centered">
                                                    <label for="email">CORREO ELECTRÓNICO</label>
                                                    <input class="input is-primary is-rounded is-medium campos" type="email" name="email" id="email" autocomplete="off" required>
                                                </div>
                                            </div>
                                        </li>

                                        <li style="width: 100%">
                                            <div class="columns is-centered is-mobile" style="padding-top: 20px;">
                                                <div class="column is-9-desktop is-10-tablet is-12-mobile has-text-centered">
                                                    <label for="escuela">ESCUELA</label>
                                                    <div class="control has-icons-left is-expanded">
                                                        <div id="escuela" class="select is-medium is-primary is-rounded is-fullwidth">
                                                            
                                                            <select name="id_escuela">
                                                                @if (isset($d))
                                                                    <option value="{{ $d->pk_escuelas }}">{{$d->escuela}}</option>   
                                                                @else
                                                                    <option selected> Escuela </option>
                                                                    @foreach ($escuelas as $item)
                                                                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                            
                                                        </div>
                                                        <div class="icon is-small is-left">
                                                            <i class="fas fa-school"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li style="width: 100%">
                                            <div class="columns is-centered is-mobile" style="padding-top: 20px;">
                                                <div class="column is-9-desktop is-10-tablet is-12-mobile has-text-centered">
                                                    <label for="comite">COMITÉ</label>
                                                    <div class="control has-icons-left is-expanded">
                                                        <div class="select is-medium is-primary is-rounded is-fullwidth">

                                                            <select id="comite" name="id_comite">
                                                                @if (isset($d))
                                                                    <option value="{{ $d->pk_comite }}" disable>{{ $d->comite }}</option>
                                                                @else
                                                                    <option value="0" selected> Selecciona tu Comité </option>
                                                                    @foreach ($comites as $item)
                                                                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                                                                    @endforeach  
                                                                @endif                                       
                                                            </select>
                                                            
                                                        </div>
                                                        <div class="icon is-small is-left">
                                                            <i class="fas fa-comment-alt"></i>
                                                        </div>
                            
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li style="width: 100%">
                                            <div class="columns is-centered is-mobile" style="padding-top: 20px;">
                                                <div class="column is-9-desktop is-10-tablet is-12-mobile has-text-centered">
                                                    <label for="pais">PAÍS</label>
                                                    <div class="control has-icons-left is-expanded">
                                                        <div class="select is-medium is-primary is-rounded is-fullwidth">
                                            
                                                            <select name="id_pais" id="pais">
                                                                @if (isset($d))
                                                                    <option value="{{ $d->pk_pais }}">{{ $d->pais }}</option> 
                                                                @else
                                                                    <option value="0"  selected> Selecciona tu País </option> 
                                                                @endif                                    
                                                            </select>

                                                        </div>
                                                        <div class="icon is-small is-left">
                                                            <i class="fas fa-flag"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li style="width: 100%">
                                            <div class="columns is-centered is-mobile" style="padding-top: 20px;">
                                                <button type="submit" class="button is-primary is-outlined is-rounded">GUARDAR DATOS</button>
                                            </div>
                                        </li>
                            
                                    </ul>
                        
                                    <div class="columns is-mobile" style="padding-top: 30px;" >
                                        <div class="column has-text-centered">
                                            <a href="#" class="button is-success is-outlined" uk-slider-item="previous">
                                                <i class="fas fa-arrow-left"></i>
                                            </a>
                                            <a style="" href="#" class="button is-success is-outlined" uk-slider-item="next">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </div>
                                    </div>
                        
                                </div>
                            </div>     

                        </div>
                    </div>

                </div>

            </div>
        </form>

    </div>
</section>

@endsection 

@section('css')
    <link rel="stylesheet" href="{{ asset('css/ui-kit.css') }}">
    <style>
    .campos{
        text-align: center;
    }
    </style>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/slider-uikit/uikit.js') }}"></script> 
    <script src="{{ asset('js/modulos/registro-completo.js')}}"></script>    
@endsection