<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">

    <title>WhatsApp Web</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div id="panel-left" class="col-md-4 px-0">
                <header class = "d-flex">
                    <img src="img/contact.svg" alt="Avatar"> 
                    <div id="search"></div>

                </header>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <img src="img/hcode-photo.svg" alt="">
                        <div class="d-flex flex-column flex-fill"> 
                            <h6>Hcode</h6>
                            <small>Rafael: Trocar desenho na TV...</small>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <span class="timeago">16:44</span>
                            <span class="badge bg-success rounded-pill">3</span>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <img src="img/hcode-photo.svg" alt="">
                        <div class="d-flex flex-column flex-fill"> 
                            <h6>Hcode</h6>
                            <small>Rafael: Trocar desenho na TV...</small>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <span class="timeago">Ontem</span>
                            <span class="badge bg-success rounded-pill">5</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-8 px-0 d-flex flex-column">
                <header class="d-flex align-items-center">
                    <img src="img/contact.svg" alt="Avatar">
                    <div class="d-flex flex-column flex-fill"> 
                        <h6>HCODE</h6>
                        <small class="timeago">Visto por último:Segunda-Feira às 18:53</small>
                    </div>
                </header>
                <main></main>
                <footer></footer>
            </div>
        </div>
    </div>
</body>
</html>