@extends('modulos.plantilla.main-index')

@section('titulo', 'Patrocinadores')

@section('body')

<div style="position: relative">
    <svg style="position: absolute; z-index: -100 " viewBox="0 0 100 40">

        <line x1="89" x2="101" y1="-1" y2="11" stroke="#04305c" stroke-width="2.5"/>
        <line x1="79" x2="101" y1="-1" y2="21" stroke="#118b42" stroke-width="2.5"/>

        <line x1="39" x2="101" y1="-1" y2="61" stroke="#118b42" stroke-width="2.5"/>


        <line x1="9" x2="30" y1="-1" y2="20" stroke="#04305c" stroke-width="2.5"/>
        
        <line x1="0" x2="20" y1="0" y2="20" stroke="#118b42" stroke-width="2.5"/>
        
        <line x1="-1" x2="20" y1="9" y2="30" stroke="#04305c" stroke-width="2.5"/>
    </svg>
            

    <section class="section" style="z-index: -1">
        <div class="container" >
            <div class="columns is-centered">
                <div class="column is-11" style="background-color: white">
                    <div class="columns">
                        <div class="column is-6">
                            <div class="columns is-centered">
                                <div class="column is-8">
                                    <img src="{{ asset('img/patrocinadores/1.png') }}">
                                </div>
                            </div>
                            <div class="columns is-centered">
                                <div class="column is-7">
                                    <img src="{{ asset('img/patrocinadores/2.jpg') }}">
                                </div>
                            </div>
                            <br>
                            <div class="columns is-centered">
                                <div class="column is-10">
                                    <img src="{{ asset('img/patrocinadores/3.png') }}">
                                </div>
                            </div>
                            <br>

                            <div class="columns is-centered">
                                <div class="column is-10">
                                    <img src="{{ asset('img/patrocinadores/8.jpeg') }}">
                                </div>
                            </div>
                            <br>
                            <div class="columns is-centered">
                                
                                <div class="column is-10 box">

                                    <div class="columns" style="background-color: ">
                                        <div class="column is-8">
                                            <p class="title" style="color: #09bcd1">Juan Carlos Landero Isidro</p>
                                            <p class="subtitle is-size-6-desktop">Desarrollador web</p>
                                        </div>
                                        <div class="column has-text-centered is-4" style="background-color: #09bcd1">
                                            <br><a href="mailto:jc_l23@hotmail.com" class="has-text-white"><i class="fas fa-envelope fa-3x"></i></a>
                                            <p class="subtitle is-size-7-desktop has-text-white"></p>

                                        </div>
                                    </div>
                                    <div class="columns" style="background-color: ">
                                        <div class="column has-text-centered is-12" style="background-color: #636767">
                                            <p class="subtitle is-size-7-desktop has-text-white">
                                                jc_l23@hotmail.com   <i class="fas fa-code is-hidden-mobile" style="margin: 0 10px;"></i>   jcarlos210193@gmail.com
                                            </p>
                                        </div>                                            
                                    </div>

                                </div>
                            </div>
                            <br>
                        </div>

                        <div class="column is-6">
                            <div class="columns is-centered">
                                <div class="column is-8">
                                    <img src="{{ asset('img/patrocinadores/4.jpeg') }}">
                                </div>
                            </div>
                            <div class="columns is-centered">
                                <div class="column is-7">
                                    <img src="{{ asset('img/patrocinadores/5.jpeg') }}">
                                </div>
                            </div>
                            <div class="columns is-centered">
                                <div class="column is-8">
                                    <img src="{{ asset('img/patrocinadores/6.jpeg') }}">
                                </div>
                            </div>
                            <div class="columns is-centered">
                                <div class="column is-7">
                                    <img src="{{ asset('img/patrocinadores/7.jpeg') }}">
                                </div>
                            </div>
                            <div class="columns is-centered">
                                <div class="column is-12">
                                    <img src="{{ asset('img/patrocinadores/10.png') }}">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <svg style="position: absolute; bottom: 0px; margin-bottom: 0px; z-index: -100; background-color: " viewBox="0 0 100 40">

        <line x1="101" x2="70" y1="31" y2="0" stroke="#04305c" stroke-width="2.5"/>
        <line x1="100" x2="60" y1="40" y2="0" stroke="#118b42" stroke-width="2.5"/>
        <line x1="91" x2="50" y1="41" y2="0" stroke="#04305c" stroke-width="2.5"/>

        <line x1="26" x2="-1" y1="41" y2="16" stroke="#118b42" stroke-width="2.5"/>
        <line x1="16" x2="-1" y1="41" y2="26" stroke="#04305c" stroke-width="2.5"/>

    </svg>
</div>

@endsection
