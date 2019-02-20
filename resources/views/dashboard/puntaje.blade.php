<div class="columns  is-multiline">

    @foreach ($user as $item)
        <div class="column is-4">
            <div class="box">
                {{ $item->pais }} 
                <p>
                    <a class="">
                        <i class="fas fa-plus"></i>
                    </a>
                </p>
            </div>
        </div>
    @endforeach
    
</div>