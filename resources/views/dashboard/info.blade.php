<div class="column">
    <div class="box">
        <nav class="level">
            <p class="level-item has-text-centered">
                ID:
                <a class="is-info"> {{ $comite->id }}</a>
            </p>
            <p class="level-item has-text-centered">
                COMITÉ:
                <a class="link is-info"> {{ $comite->nombre }}</a>
            </p>
            <p class="level-item has-text-centered">
                IDIOMA:
                <a class="link is-info"> {{ $comite->idioma }}</a>
            </p>
            <p class="level-item has-text-centered">
                USUARIO:
                <a class="link is-info"> {{ $comite->codigo }}</a>
            </p>
        </nav>
    </div>

    <div class="box">
        <table class="table is-fullwidth">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>PAÍS</th>
                    <th>EMAIL</th>
                    <th>CÓDIGO</th>
                    <th>ESTADO</th>
                    <th>ESCUELA</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($delegados as $alumno)
                <tr>
                    <td>{{ $alumno->id }}</td>
                    <td>{{ $alumno->pais }}</td>
                    <td>{{ $alumno->mail }}</td>
                    <td>{{ $alumno->codigo }}</td>
                    <td>@if ($alumno->recepcionado == 1)
                        <span style="color: #46a14a"><i class="fas fa-check-circle"></i></span>
                    @else
                        <span style="color: #ff3860"><i class="fas fa-times-circle"></i></span>
                    @endif</td>
                    <td>{{ $alumno->escuela }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>