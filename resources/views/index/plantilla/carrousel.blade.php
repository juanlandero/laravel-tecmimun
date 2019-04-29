<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: fade; autoplay: true; autoplay-interval: 6000; pause-on-hover: false">

    <ul class="uk-slideshow-items">
        <li>
            <img src="img/slider/slide1.jpg" alt="" uk-cover style="opacity: 0.9">
            <div class="uk-position-center uk-position-small uk-text-center uk-light">
            </div>
        </li>
        <li>
            <img src="img/slider/slide2.jpg" alt="" uk-cover style="opacity: 0.9">
            <div class="uk-position-center uk-position-small uk-text-center">
            </div>
        </li>
        <li>
            <img src="img/slider/slide3.jpg" alt="" uk-cover style="opacity: 0.9">
            <div class="uk-position-center uk-position-small uk-text-center">
            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

    <div class="uk-position-bottom-center uk-position-small">
        <ul class="uk-dotnav uk-hidden-hover">
            <li uk-slideshow-item="0"><a href="#">Item 1</a></li>
            <li uk-slideshow-item="1"><a href="#">Item 2</a></li>
            <li uk-slideshow-item="2"><a href="#">Item 3</a></li>
        </ul>
    </div>

    <div class="uk-position-top" uk-scrollspy="cls:uk-animation-fade; delay: 300" style="z-index: 1000">
        @include('index.plantilla.navbar')
    </div>
</div>
        