<link rel="stylesheet" href="{{ asset('css/ui-kit.css') }}">
<div class="columns  is-multiline">

    @foreach ($user as $item)
        <div class="column is-4">
            <div class="box">
                <div class="columns is-mobile">
                    <div class="column is-10">{{ $item->pais }}</div>
                    <div class="column is-2">
                        <a onclick="setPuntos({{ $item->delegacion }}, '{{ $item->pais }}')" class="button"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<script src="{{ asset('js/puntos.js') }}"></script>
<script src="{{ asset('js/slider-uikit/uikit.js') }}"></script>