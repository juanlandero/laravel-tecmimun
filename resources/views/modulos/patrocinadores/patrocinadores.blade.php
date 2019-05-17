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
                                <div class="column is-10">
                                    <img src="{{ asset('img/patrocinadores/1.jpeg') }}">
                                </div>
                            </div>
                            <div class="columns is-centered">
                                <div class="column is-10">
                                    <img src="{{ asset('img/patrocinadores/2.jpeg') }}">
                                </div>
                            </div>
                            <div class="columns is-centered">
                                <div class="column is-10">
                                    <img src="{{ asset('img/patrocinadores/3.jpeg') }}">
                                </div>
                            </div>
                        </div>

                        <div class="column is-6">
                            <div class="columns is-centered">
                                <div class="column is-10">
                                    <img src="{{ asset('img/patrocinadores/4.jpeg') }}">
                                </div>
                            </div>
                            <div class="columns is-centered">
                                <div class="column is-10">
                                    <img src="{{ asset('img/patrocinadores/5.jpeg') }}">
                                </div>
                            </div>
                            <div class="columns is-centered">
                                <div class="column is-10">
                                    <img src="{{ asset('img/patrocinadores/6.jpeg') }}">
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
