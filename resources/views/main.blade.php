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
                    <h2 class="text-white mx-auto mt-2 mb-5">Full stack web developper</h2>
                    <a class="btn js-scroll-trigger" style="background-color: #22ff88;" href="#about">Discover me</a>
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
                <!-- Project One Row-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0" id="informations">
                    <div class="col-lg-6"><img class="img-fluid" src={{asset("img/demo-image-01.jpg")}} alt="" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white mb-5" style="font-weight: 700">My skills</h4>
                                    <div class="skills">
                                        <div class="skills-gauge" style="height: 130px"><p class="gauge-text">Adobe</p></div>
                                        <div class="skills-gauge" style="height: 160px"><p class="gauge-text">HTML/CSS</p></div>
                                        <div class="skills-gauge" style="height: 160px"><p class="gauge-text">Bootstrap</p></div>                                      
                                        <div class="skills-gauge" style="height: 130px"><p class="gauge-text">JavaScript</p></div>
                                        <div class="skills-gauge" style="height: 100px"><p class="gauge-text">ReactJS</p></div>
                                        <div class="skills-gauge" style="height: 140px"><p class="gauge-text">Laravel</p></div>
                                        <div class="skills-gauge" style="height: 120px"><p class="gauge-text">Git</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6"><img class="img-fluid" src={{asset("img/demo-image-02.jpg")}} alt="" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white" style="font-weight: 700">Services</h4>
                                    <ul class="text-white" style="font-weight: 700"> Website (4 sections) 1300€ : 
                                        <li class="mr-3" style="direction: rtl; font-weight : 400">About</li>
                                        <li class="mr-3" style="direction: rtl; font-weight : 400">Contact</li>
                                        <li class="mr-3" style="direction: rtl; font-weight : 400">Projects</li>
                                    </ul>
                                    <ul class="text-white" style="font-weight: 700"> Bonus functions : 
                                        <li class="mr-3" style="direction: rtl; font-weight : 400">Carousel (200€)</li>
                                        <li class="mr-3" style="direction: rtl; font-weight : 400">Skills (250€)</li>
                                    </ul>
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
        <section class="signup-section" id="signup">
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
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope mb-2" style="color : #22ff88;"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><a href="#!">fanny.hunin.an123@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://www.instagram.com/ahzirra_draws" target="_blank"><i class="fab fa-instagram"></i></a>
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
