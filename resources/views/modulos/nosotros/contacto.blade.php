@extends('modulos.plantilla.main-index')

@section('titulo', 'Contacto')

@section('body')

  @section('contenido-navbar')
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="hero-container">
                <span class="title">Contacto</span>
                
            </div>
        </div>
    </section>
  @endsection

<section class="section">
    <div class="container">
        <div class="columns">
          <div class="column is-5">
              <div class="column has-text-centered">
                  <span class="icon is-large has-text-primary">
                      <i class="fas fa-2x fa-envelope"></i>
                  </span>
                  <h1 class="title is-size-3-desktop is-size-4-mobile">E-mail</h1>
                  <p class="subtitle box is-size-6-mobile">tecmimunvhsa@gmail.com</p>
              </div>
              <br>
              <div class="column has-text-centered">
                  <span class="icon is-large has-text-primary">
                      <i class="fas fa-2x fa-map-marker-alt"></i>
                  </span>
                  <h1 class="title is-size-3-desktop is-size-4-mobile">Dirección</h1>
                  <p class="subtitle box is-size-6-mobile">
                      José Mariscal S/N, Jose Maria Pino Suarez, 86029 Villahermosa, Tabasco.
                  </p>
              </div>
          </div>

          <div class="column is-7" id="map">
              <iframe width="100%" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=tecmilenio%20villahermosa&key=AIzaSyDDXCUmvba67XWVQFHb4U6ZIYfiZSw2O1k" allowfullscreen></iframe>
          </div>
        </div>
    </div>

  </section>
@endsection

@section('scripts')
    <script>
        var map;
        function initMap() {
        // Create the map with no initial style specified.
        // It therefore has default styling.

        //18.0189106,-92.9377023
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 18.0189106, lng: -92.9377023},
          zoom: 17,
          mapTypeControl: true
        });

        // Add a style-selector control to the map.
        var styleControl = document.getElementById('style-selector-control');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(styleControl);

        // Set the map's style to the initial value of the selector.
        var styleSelector = document.getElementById('style-selector');
        map.setOptions({styles: styles['retro']});

        // Apply new JSON when the user selects a different style.
        styleSelector.addEventListener('change', function() {
          map.setOptions({styles: styles[styleSelector.value]});
        });
        }

        var styles = {
            default: null,
            silver: [
                  {
                      elementType: 'geometry',
                      stylers: [{color: '#f5f5f5'}]
                  },
                  {
                      elementType: 'labels.icon',
                      stylers: [{visibility: 'off'}]
                  },
                  {
                      elementType: 'labels.text.fill',
                      stylers: [{color: '#616161'}]
                  },
                  {
                      elementType: 'labels.text.stroke',
                      stylers: [{color: '#f5f5f5'}]
                  },
                  {
                      featureType: 'administrative.land_parcel',
                      elementType: 'labels.text.fill',
                      stylers: [{color: '#bdbdbd'}]
                  },
                  {
                      featureType: 'poi',
                      elementType: 'geometry',
                      stylers: [{color: '#eeeeee'}]
                  },
                  {
                      featureType: 'poi',
                      elementType: 'labels.text.fill',
                      stylers: [{color: '#757575'}]
                  },
                  {
                      featureType: 'poi.park',
                      elementType: 'geometry',
                      stylers: [{color: '#e5e5e5'}]
                  },
                  {
                      featureType: 'poi.park',
                      elementType: 'labels.text.fill',
                      stylers: [{color: '#9e9e9e'}]
                  },
                  {
                      featureType: 'road',
                      elementType: 'geometry',
                      stylers: [{color: '#ffffff'}]
                  },
                  {
                      featureType: 'road.arterial',
                      elementType: 'labels.text.fill',
                      stylers: [{color: '#757575'}]
                  },
                  {
                      featureType: 'road.highway',
                      elementType: 'geometry',
                      stylers: [{color: '#dadada'}]
                  },
                  {
                      featureType: 'road.highway',
                      elementType: 'labels.text.fill',
                      stylers: [{color: '#616161'}]
                  },
                  {
                      featureType: 'road.local',
                      elementType: 'labels.text.fill',
                      stylers: [{color: '#9e9e9e'}]
                  },
                  {
                      featureType: 'transit.line',
                      elementType: 'geometry',
                      stylers: [{color: '#e5e5e5'}]
                  },
                  {
                      featureType: 'transit.station',
                      elementType: 'geometry',
                      stylers: [{color: '#eeeeee'}]
                  },
                  {
                      featureType: 'water',
                      elementType: 'geometry',
                      stylers: [{color: '#c9c9c9'}]
                  },
                  {
                      featureType: 'water',
                      elementType: 'labels.text.fill',
                      stylers: [{color: '#9e9e9e'}]
                  }
              ],

              night: [
                {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                {
                  featureType: 'administrative.locality',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#d59563'}]
                },
                {
                  featureType: 'poi',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#d59563'}]
                },
                {
                  featureType: 'poi.park',
                  elementType: 'geometry',
                  stylers: [{color: '#263c3f'}]
                },
                {
                  featureType: 'poi.park',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#6b9a76'}]
                },
                {
                  featureType: 'road',
                  elementType: 'geometry',
                  stylers: [{color: '#38414e'}]
                },
                {
                  featureType: 'road',
                  elementType: 'geometry.stroke',
                  stylers: [{color: '#212a37'}]
                },
                {
                  featureType: 'road',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#9ca5b3'}]
                },
                {
                  featureType: 'road.highway',
                  elementType: 'geometry',
                  stylers: [{color: '#746855'}]
                },
                {
                  featureType: 'road.highway',
                  elementType: 'geometry.stroke',
                  stylers: [{color: '#1f2835'}]
                },
                {
                  featureType: 'road.highway',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#f3d19c'}]
                },
                {
                  featureType: 'transit',
                  elementType: 'geometry',
                  stylers: [{color: '#2f3948'}]
                },
                {
                  featureType: 'transit.station',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#d59563'}]
                },
                {
                  featureType: 'water',
                  elementType: 'geometry',
                  stylers: [{color: '#17263c'}]
                },
                {
                  featureType: 'water',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#515c6d'}]
                },
                {
                  featureType: 'water',
                  elementType: 'labels.text.stroke',
                  stylers: [{color: '#17263c'}]
                }
            ],

            retro: [
                {elementType: 'geometry', stylers: [{color: '#ebe3cd'}]},
                {elementType: 'labels.text.fill', stylers: [{color: '#523735'}]},
                {elementType: 'labels.text.stroke', stylers: [{color: '#f5f1e6'}]},
                {
                    featureType: 'administrative',
                    elementType: 'geometry.stroke',
                    stylers: [{color: '#c9b2a6'}]
                },
                {
                    featureType: 'administrative.land_parcel',
                    elementType: 'geometry.stroke',
                    stylers: [{color: '#dcd2be'}]
                },
                {
                    featureType: 'administrative.land_parcel',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#ae9e90'}]
                },
                {
                    featureType: 'landscape.natural',
                    elementType: 'geometry',
                    stylers: [{color: '#dfd2ae'}]
                },
                {
                    featureType: 'poi',
                    elementType: 'geometry',
                    stylers: [{color: '#dfd2ae'}]
                },
                {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#93817c'}]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'geometry.fill',
                    stylers: [{color: '#a5b076'}]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#447530'}]
                },
                {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#f5f1e6'}]
                },
                {
                    featureType: 'road.arterial',
                    elementType: 'geometry',
                    stylers: [{color: '#fdfcf8'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#f8c967'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry.stroke',
                    stylers: [{color: '#e9bc62'}]
                },
                {
                    featureType: 'road.highway.controlled_access',
                    elementType: 'geometry',
                    stylers: [{color: '#e98d58'}]
                },
                {
                    featureType: 'road.highway.controlled_access',
                    elementType: 'geometry.stroke',
                    stylers: [{color: '#db8555'}]
                },
                {
                    featureType: 'road.local',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#806b63'}]
                },
                {
                    featureType: 'transit.line',
                    elementType: 'geometry',
                    stylers: [{color: '#dfd2ae'}]
                },
                {
                    featureType: 'transit.line',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#8f7d77'}]
                },
                {
                    featureType: 'transit.line',
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#ebe3cd'}]
                },
                {
                    featureType: 'transit.station',
                    elementType: 'geometry',
                    stylers: [{color: '#dfd2ae'}]
                },
                {
                    featureType: 'water',
                    elementType: 'geometry.fill',
                    stylers: [{color: '#b9d3c2'}]
                },
                {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#92998d'}]
                }
            ],

            hiding: [
                {
                    featureType: 'poi.business',
                    stylers: [{visibility: 'off'}]
                },
                {
                    featureType: 'transit',
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                }
            ]

        };
    </script>
@endsection