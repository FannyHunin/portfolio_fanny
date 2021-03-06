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
        {{-- Passionate about programming and tech, I'm always ready to learn and to create something great. I studied Digital Arts and Video-Games during 3 years in ESA Saint-Luc Bruxelles and graduated successfully. After That, I took an intensive 6 months course at MolenGeek to learn how to be a Full Stack Web Developper. I now teach young adults how to become the developper they've always wanted to become. --}}
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Fanny Hunin</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#informations">Informations</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <img src={{asset("img/fanny.gif")}} alt="" width="50%">
                    <h2 class="text-white mx-auto mt-2 mb-5">Junior Full Stack Web Developper</h2>
                    <a class="btn js-scroll-trigger" id="buttonAbout" style="background-color: #22ff88;" href="#about">Discover me</a>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="mb-4" style="color: #22ff88;font-weight: 700">About me</h2>
                        @foreach ($aboutData as $item)
                            <p class="text-white">{{$item->description}}</p>
                        @endforeach
                    </div>
                </div>
                <i class="fas fa-laptop-code mb-5" style="color: #22ff88; font-size : 300px" ></i>
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container">
                <h2 class="mb-4 text-center" style="color: #000000;font-weight: 700">My work</h2>
                
                <!-- Featured Project Row-->
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
                                  <div class="carousel-item">
                                    <img src="{{asset('images/'.$item->src4)}}" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="{{asset('images/'.$item->src5)}}" class="d-block w-100" alt="...">
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
                <div class="row d-flex justify-content-center mb-5 mx-0">
                    <div>
                        {{$projectData->links()}}
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row justify-content-center no-gutters" id="informations">
                    <div  class="col-lg-6"><img style='width : 100%; height : 100%' src={{asset("img/webDev-bg.jpg")}} alt="" /></div>
                    <div  class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white" style="font-weight: 700">Skills</h4>
                                        @foreach ($serviceData as $item)
                                          <p style='font-size : 16px; background-color : #22ff88;' class="badge p-2">{{$item->name}}</p>
                                        @endforeach
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
        {{-- <section class="signup-section" id="signup">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2" style="color: #22ff88;"></i>
                        <h2 class="mb-5" style="color: #22ff88; font-weight: 700;">Subscribe to receive updates on my projects !</h2>
                        <form class="form-inline d-flex" method="post" action="/mail_sending">
                            @csrf
                            <input name="sender_mail" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" type="email" placeholder="Enter email address..." />
                            <button class="btn mx-auto" style="background-color: #22ff88;" type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Contact-->
        {{-- @if(session()->has('jsAlert'))
            <script>
                alert({{ session()->get('jsAlert') }});
            </script>
        @endif  --}}
        <section class="contact-section bg-black " id="signup">
            <div class="container">
                <i class="fas fa-envelope fa-2x mb-2"style="color: #22ff88; text-align : center; width : 100%"></i>
                <h2 class="mb-5" style="color: #22ff88; font-weight: 700; text-align : center">Contact me !</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="300" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=molengeek&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <a href="https://embedgooglemap.net/fmovies/"></a>
                            </div>
                            <style>.mapouter{position:relative;text-align:right;height:300px;width:300px;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:300px;}</style>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex justify-content-center align-items-center">
                        <form class="form-inline d-flex flex-column" method="post" action="/message_sending">
                            @csrf
                            <div class="mb-3 d-flex justify-content-between w-100">
                                <input name="email" class="form-control flex-fill m-0" id="inputEmail" type="email" placeholder="Enter email address..." />
                            </div>
                            <textarea class="rounded text-muted mb-3" name="message" id="" cols="75" rows="10" placeholder="Enter your message..."></textarea>
                            <button class="btn mx-auto" style="background-color: #22ff88;" type="submit">Send</button>
                        </form>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://www.instagram.com/ahzirra_draws" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="mx-2" href="https://www.linkedin.com/in/fanny-hunin-117394194/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a class="mx-2" href="https://github.com/FannyHunin" target="_blank"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © Fanny Hunin 2021</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset("js/app.js")}}"></script>
    </body>
</html>
