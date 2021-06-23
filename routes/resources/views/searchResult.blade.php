<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Fanny Hunin</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href={{asset("css/app.css")}}>
    </head>
    <body id="page-top">
        <div class="row align-items-center no-gutters mb-2 mb-lg-5 ">
            @foreach ($projectData as $item)
            <div class="col-xl-8 col-lg-7 mb-2">
                {{-- carousel --}}
                <div id="{{$item->id}}" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img src="{{asset('images/'.$item->src1)}}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('images/'.$item->src2)}}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('images/'.$item->src3)}}" class="d-block w-100" alt="...">
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4 style="font-weight: 700">{{$item->name}}</h4>
                    <p class="text-black-50 mb-0">{{$item->description}}</p>
                    <a class="btn mt-3" target="_blank" href="{{$item->link}}" style="background-color: #22ff88;">repository</a>
                    <div style="display: flex">
                        <div class="alert alert-success mr-1 mt-2 p-2" style="color : black; width : max-content; font-size : 12px; text-transform : uppercase;" role="alert">
                            {{$item->tags->name}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset("js/app.js")}}"></script>
    </body>
</html>