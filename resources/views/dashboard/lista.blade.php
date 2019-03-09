<div class="columns is-mobile is-multiline">
    @foreach ($user as $item)
        <div class="column is-12">
            <div class="box">
            <div class="columns is-vcentered">
                <div class="column  is-8">
                        {{ $item->pais }}
                </div>
                <div class="column is-2">
                    <a href="" class="button is-rounded is-inverted is-primary">*</a>
                </div>
                <div class="column is-2">
                    <a href="" class="button is-rounded is-inverted is-primary">/</a>
                </div>
                    
            </div>
            </div>
        </div>
    @endforeach
</div>
<!--div class="columns">
    <button class="button" onclick="add()">Boton</button>
    <div class="column">
        <table class="table is-fullwidth" id="paseLista">
            <thead>
                <tr id="e"> 
                    <td>ID</td>
                    <td>PAÍSES</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                    <tr id="c">
                        <td>1</td>
                        <td>{{ $item->pais }}</td>
                        <td>
                            <a class="is-primary">
                                <span class="icon is-large">
                                    <i class="fas fa-lg fa-clipboard-list"></i>
                                </span> 
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div-->


<script>
$(document).ready(function(){
    $('#paseLista').dynatable({
        features: {
            paginate: false,
            sort: true,
            pushState: true,
            search: true,
            recordCount: true,
            perPageSelect: false
        }
    });     
});


function add() {

    $('#e').append('<td>prueba</td>');
    $('#c').append('<td><a class="is-primary"><span class="icon is-large"><i class="fas fa-lg fa-clipboard-list"></i></span></a></td>');

}
</script>