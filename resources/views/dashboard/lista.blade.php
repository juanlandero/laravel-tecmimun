<div class="columns">
    <div class="column">
        <table class="table is-fullwidth" id="paseLista">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>PAÍSES</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                    <tr>
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
</div>


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
</script>