
    <div id="new" class="col-md-4">
        <div class="card p-2 h-100" id="card">
            <div class="card-body">
                <h5 class="card-title fs-4" style="color: #20800a; font-weight: 700;">{{$title}}</h5>
                <br>
                <img src={{$image}} class="card-img-top" style="height: 200px; width: 90%">
                <p class="card-text" style="color: black; text-align:justify; margin-top: 20px">{{$content}}</p>
                <br>
                <button class="btn btn-success btn-lg">Ver noticia completa</button>
            </div>
        </div>
    </div>
<style>
    #card{
        transition: 0.2s;
    }
    #card:hover{
        box-shadow: 10px 10px 2px 2px rgb(188, 188, 188) ;
    }
    #new{
        margin-bottom: 10px;
    }
</style>