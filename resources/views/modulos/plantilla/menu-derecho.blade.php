<link rel="stylesheet" type="text/css" href="{{ asset('css/menu/normalize.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/menu/demo.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/menu/style-adsila.css') }}" />
<main>
    <section class="demo-content">
        <nav class="menu menu--adsila">
            <a class="menu__item" href="{{ route('index.comites') }}">
                <span class="menu__item-label">Comités</span>
            </a>
            <a class="menu__item" href="{{ route('modulo.premiacion') }}">
                <span class="menu__item-label">Criterios de premiación</span>
            </a>
            <a class="menu__item" href="{{ route('modulo.antecedentes') }}">
                <span class="menu__item-label">Antecedentes</span>
            </a>
            <a class="menu__item" href="{{ route('modulo.posiciones-oficiales') }}">
                <span class="menu__item-label">Posiciones oficiales</span>
            </a>
            <a class="menu__item" href="{{ route('modulo.recursos-apoyo') }}">
                <span class="menu__item-label">Recursos de apoyo</span>
            </a>
        </nav>
    </section>
</main>
<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>		

<script src="{{ asset('js/menu/demo.js') }}"></script>