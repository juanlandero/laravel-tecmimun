<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ui-kit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icon/all.css') }}">
</head>
<body>
<div style="background-color: cadetblue">
    <div uk-slider="draggable: false">

        <div class="uk-slider-container">
            <ul class="uk-slider-items uk-child-width-1-4">
               
                <li style="width: 100%">
                    <section class="section" style="background-color: darkblue;">
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
                                                            
                                                                <select>
                                                                        <option>Select dropdown</option>
                                                                        <option>With options</option>
                                                                      </select>
                                                            
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
                                                                                          
                                                                <select>
                                                                        <option>Select dropdown</option>
                                                                        <option>With options</option>
                                                                      </select>
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
                                                            
                                                                <select>
                                                                        <option>Select dropdown</option>
                                                                        <option>With options</option>
                                                                      </select>
                                                            
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
                    
                                    <a href="#2" class="button is-success">Siguiente</a>
                                </div>
                    
                                
                                <!--div class="column has-text-centered">  
                                    <img src="img/logo.png" alt="">
                                    
                                    <p class="title">Registro con código</p>
                                    <a href="#" onclick="toggleModal()" class="button is-rounded is-danger">Registrarme</a>
                                </div-->
                            </div>
                    
                        </div>
                    </section>
                </li>
                <li id="2">
                    <section class="section" >
                        <div class="container">
                    
                            <div class="columns is-vcentered is-centered">
                                <div class="column is-5">
                                    segundo formulario
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
                </li>
                <li>
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
                </li>
            </ul>

        </div>
                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
        
                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
       
    
    </div>
    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/slider-uikit/uikit.js') }}"></script>
</body>
</html>