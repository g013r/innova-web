<div id="service" class="col">
    <div class="card h-100" id="card">
        <div class="card-body">
            <h5 class="card-title fs-4" style="color: #20800a; font-weight: 700;">{{$title}}</h5>
            <p class="card-text" style="color: black; text-align:justify">{{$message}}</p>
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
    #service{
        margin-bottom: 10px
    }
</style>